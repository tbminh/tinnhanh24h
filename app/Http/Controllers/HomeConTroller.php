<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeConTroller extends Controller
{
    public function index()
    {
        $first_slide = Category::join('posts', 'categories.id', '=', 'posts.cate_id')
            ->join('users', 'users.id', "=", 'posts.author')
            ->orderBy('posts.id', 'DESC')
            ->take(4)
            ->get(['categories.cate_name', 'posts.title', 'posts.image', 'posts.id', 'users.full_name', 'posts.created_at', 'posts.cate_id', 'posts.author']);
        $get_news = Category::join('posts', 'categories.id', '=', 'posts.cate_id')
            ->join('users', 'users.id', "=", 'posts.author')
            ->select(['categories.cate_name', 'posts.title', 'posts.image', 'posts.id', 'users.full_name', 'posts.created_at', 'posts.content', 'posts.view', 'posts.cate_id', 'posts.author'])
            ->orderBy('posts.id', 'DESC')
            ->paginate(3);

        $populars = DB::table('posts')->orderByDesc('view')->take(3)->get();
        return view('custom_page.index', [
            'first_slide' => $first_slide,
            'get_news' => $get_news,
            'populars' => $populars
        ]);
    }

    public function add_user(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'fullname' => 'required',
                'email' => 'required',
                'password' => 'required',
                'confirm' => 'required',
                'phone' => 'required'
            ],
            [
                'fullname.require' => 'Vui lòng nhập họ tên',
                'email.require' => 'Vui lòng nhập email',
                'password.require' => 'Vui lòng nhập mật khẩu',
                'confirm.require' => 'Vui lòng nhập xác nhận',
                'phone.require' => 'Vui lòng nhập số điện thoại'
            ]
        );
        $add_user = new User();
        $add_user->role_id = 3;
        $add_user->email = $request->input('email');
        $add_user->password = bcrypt($request->input('password'));
        $add_user->full_name = $request->input('fullname');
        $add_user->gender = $request->input('gender');
        $add_user->phone_number = $request->input('phone');
        if ($request->hasFile('inputFileImage')) {
            $image = $request->file('inputFileImage');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('public/upload'), $image_name);
            $add_user->avatar = $image_name;
        }
        $add_user->save();
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'errors' => $validator->errors()->toArray()]);
        }
        return redirect()->back()->with('alert', 'Đăng ký thành công');
    }
    //Kiểm tra đăng nhập
    public function post_login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => 3])) {
            return redirect()->back()->with('alert', 'Đăng nhập thành công');
        } else {
            return redirect()->back()->with('alert', 'Sai mật khẩu');
        }
    }
    public function page_contact()
    {
        return view('custom_page.page_contact');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function post_detail($id)
    {
        // $get_detail = DB::table('posts')->where('id', $id)->first(); //Lấy chi tiết tin tức 
        // $get_cate = DB::table('categories')->where('id', $get_detail->cate_id)->first(); //Lấy thể loại của tin tức
        $get_detail = Category::join('posts', 'categories.id', '=', 'posts.cate_id')
            ->join('users', 'users.id', "=", 'posts.author')
            ->select(['categories.cate_name', 'posts.*','users.full_name'])
            ->where('posts.id',$id)
            ->first();
        //Cập nhật lại view
        $update_view = Post::find($id);
        $update_view->view = $update_view->view + 1;
        $update_view->save();
        return view('custom_page.post_detail', [
            'get_detail' => $get_detail
        ]);
    }
    public function list_post($id, Request $request)
    {
        $search = $request->input('search');
        $get_cate = DB::table('categories')->where('id', $id)->first();
        if ($search != '') {
            $get_list = DB::table('posts')->where('title', 'LIKE', "%$search%")->paginate(3);
        } else {
            $get_list = DB::table('posts')->where('cate_id', $id)->latest()->paginate(3);
        }

        return view('custom_page.list_post', [
            'get_list' => $get_list,
            'get_cate' => $get_cate
        ]);
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createUser($getInfo, $provider);
        auth()->login($user);
        return redirect()->to('/');
    }

    function createUser($getInfo, $provider)
    {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) { //Nếu chưa có tài khoản trong csdl thì tạo mới
            $user = User::create([
                'role_id' => 3,
                'full_name' => $getInfo->name,
                'email'    => $getInfo->email,
                'password' => bcrypt('provider12345'),
                'provider_id' => $getInfo->id,
                'provider' => $provider
            ]);
        }
        return $user;
    }

    public function isOnline($site = "https://www.youtube.com/")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
    public function post_feedback(Request $request)
    {
        if ($this->isOnline()) {
            $mail_data = [
                'recipient' => 'odinkingiv@gmail.com',
                'fromName' => $request->input('inputName'),
                'fromEmail' => $request->input('inputEmail'),
                'phone' => $request->input('inputPhone'),
                'subject' => $request->input('inputTitle'),
                'body' => $request->input('inputText')
            ];
            Mail::send('custom_page.email-template', $mail_data, function ($message) use ($mail_data) {
                $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'], $mail_data['fromName'])
                    ->subject($mail_data['subject']);
            });
            return redirect()->back()->with("alert", "Email đã được gửi!");
        }
    }

    public function profile_info($id)
    {
        return view('custom_page.profile_info');
    }

    public function change_profile(Request $request, $id_user)
    {
        $old_pass = $request->input('inputOld');
        $new_pass = $request->input('inputNew');
        $confirm = $request->input('inputConfirm');
        $update_profile = User::find($id_user);
        //Update password if fill in 3 textbox
        if ($old_pass != "" && $new_pass != "" && $confirm != "") {
            if ($new_pass != $confirm) {
                return redirect()->back()->with('alert', 'Xác nhận mật khẩu không đúng');
            } else if (bcrypt($old_pass) != $update_profile->password) {
                return redirect()->back()->with('alert', 'Mật khẩu cũ không đúng');
            } else {
                $update_profile->password = bcrypt($new_pass);
            }
        }
        $update_profile->full_name = $request->input('inputName');
        $update_profile->email = $request->input('inputEmail');
        $update_profile->phone_number = $request->input('inputPhone');
        $update_profile->gender = $request->input('inputGender');

        if ($request->hasFile('inputFileImage')) {
            $image = $request->file('inputFileImage');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('public/upload'), $image_name);
            $update_profile->avatar = $image_name;
        }
        $update_profile->save();
        return redirect()->back()->with('alert', 'Cập nhật thành công');
    }
    public function page_author($id)
    {
        $get_author = User::where('id', $id)->first();
        // $get_page = Post::where('author', $id)->paginate(3);
        $populars = DB::table('posts')->orderByDesc('view')->take(3)->get();

        $get_page = Category::join('posts', 'categories.id', '=', 'posts.cate_id')
            ->select(['categories.cate_name', 'posts.title', 'posts.image', 'posts.id', 'posts.created_at', 'posts.content', 'posts.view', 'posts.cate_id'])
            ->orderBy('posts.id', 'DESC')
            ->paginate(3);

        return view('custom_page.page_author', [
            'get_author' => $get_author,
            'get_page' => $get_page,
            'populars' => $populars
        ]);
    }
    public function about_us()
    {
        return view('custom_page.about_us');
    }
}
