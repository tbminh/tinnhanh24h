<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
            ->get(['categories.cate_name', 'posts.title', 'posts.image', 'posts.id', 'users.full_name', 'posts.created_at']);

        $get_news = Category::join('posts', 'categories.id', '=', 'posts.cate_id')
            ->join('users', 'users.id', "=", 'posts.author')
            ->select(['categories.cate_name', 'posts.title', 'posts.image', 'posts.id', 'users.full_name', 'posts.created_at', 'posts.content', 'posts.view'])
            ->orderBy('posts.id', 'DESC')
            ->limit(5)
            ->paginate(3);
        return view('custom_page.index', [
            'first_slide' => $first_slide,
            'get_news' => $get_news
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

        if ($validator->fails()) {
            return response()->json(['status' => 0, 'errors' => $validator->errors()->toArray()]);
        }
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
        return redirect()->back();
    }
    public function post_detail($id)
    {
        $get_detail = DB::table('posts')->where('id', $id)->first();
        $get_cate = DB::table('categories')->where('id', $get_detail->cate_id)->first();
        return view('custom_page.post_detail', [
            'get_detail' => $get_detail,
            'get_cate' => $get_cate
        ]);
    }
    public function list_post($id)
    {
        $get_cate = DB::table('categories')->where('id', $id)->first();
        $get_list = DB::table('posts')->where('cate_id', $id)->latest()->paginate(3);
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
        if (!$user) {
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
}
