<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\RoleAccess;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Schema\ValidationException;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Route;

class AdminController extends Controller
{
    public function post_login_admin(Request $request)
    {
        $email = $request->input('inputEmail');
        $password = $request->input('inputPass');
        try {
            $req = $request->validate(
                [
                    'inputEmail' => 'required|email',
                    'inputPass' => 'required'
                ],
                [
                    'inputEmail.required' => 'Vui lòng nhập email',
                    'inputEmail.email' => 'Email không đúng định dạng',
                    'inputPass.required' => 'Vui lòng nhập mật khẩu'
                ]
            );
        } catch (ValidationException $e) {
        }
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => 1])) {
            return redirect('page-admin');
        } else if (Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => 2])) {
            return redirect('page-admin');
        } else {
            return redirect('page-login-admin');
        }
    }
    public function logout_admin()
    {
        Auth::logout();
        return redirect('page-login-admin');
    }
    public function index()
    {
        $get_post = DB::table('posts')->where('post_status', 0)->get();
        return view('admin_page.index', ['get_post' => $get_post]);
    }
    public function role_access()
    {
        $show_user_roles = User::paginate(5);
        // return view('admin_page.role_access', ['show_user_roles' => $show_user_roles]);
        return view('admin_page.role_access',compact('show_user_roles'));
    }
    public function page_guest()
    {
        $show_employee = User::where('role_id', 3)->latest()->paginate(5);
        return view('admin_page.page_guest', ['show_employee' => $show_employee]);
    }
    public function page_category()
    {
        $show_categories = Category::paginate(5);
        return view('admin_page.page_category', ['show_categories' => $show_categories]);
    }
    //Thêm category
    public function post_add_category(Request $request)
    {
        $add_cate = new Category();
        $add_cate->cate_name = $request->input('inputName');
        $add_cate->cate_note = $request->input('inputNote');
        $add_cate->save();
        return redirect()->back()->with('message1', 'Đã thêm loại sản phẩm');
    }
    public function delete_category($id)
    {
        Category::destroy($id);
        return redirect()->back()->with('message', 'Đã xóa thành công');
    }
    public function page_post()
    {
        $show_posts = Post::paginate(5);
        return view('admin_page.page_post', ['show_posts' => $show_posts]);
    }
    public function page_add_post(Request $request)
    {
        return view('admin_page.add_post');
    }
    //Hàm thêm bài viết mới
    public function add_posts(Request $request)
    {
        $add_post = new Post();
        $add_post->cate_id = $request->input('inputCategoryId');
        $add_post->author = $request->input('inputAuthor');
        $add_post->title = $request->input('inputTitle');
        $add_post->content = $request->input('inputContent');
        $add_post->post_status = 0;
        $add_post->view = 0;
        if ($request->hasFile('inputFileImage')) {
            $image = $request->file('inputFileImage');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('public/upload'), $image_name);
            $add_post->image = $image_name;
        }
        $add_post->save();
        return redirect('page-post')->with('success', 'Đã thêm bài viết mới');
    }
    public function delete_post($id)
    {
        Post::destroy($id);
        return redirect()->back()->with('message', 'Đã xóa thành công');
    }
    public function page_profile($id)
    {
        $infor_user = User::find($id);
        return view('admin_page.edit_profile', ['infor_user' => $infor_user]);
    }
    public function change_pass($id)
    {
        $user_id = User::find($id);
        return view('admin_page.change_pass', ['user_id' => $user_id]);
    }
    public function update_password(Request $request, $id)
    {
        $update_user = User::find($id);
        $update_user->password = bcrypt($request->input('inputPassNew'));
        $update_user->save();
        return redirect()->back()->with('mes', 'Đổi mật khẩu thành công');
    }
    public function update_profile(Request $request, $id)
    {
        $update_user =  User::find($id);
        $update_user->full_name = $request->input('inputFullname');
        $update_user->gender = $request->input('inputSex');
        $update_user->phone_number = $request->input('inputPhone');
        if ($request->hasFile('inputFileImage')) {
            $image = $request->file('inputFileImage');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('public/upload'), $image_name);
            $update_user->avatar = $image_name;
        }
        $update_user->save();
        return redirect()->back()->with('message', 'Cập nhật thành công');
    }
    public function post_add_user(Request $request)
    {
        $add_user = new User();
        $add_user->role_id = $request->input('inputRoleId');
        $add_user->full_name = $request->input('inputFullName');
        $add_user->email = $request->input('inputEmail');
        $add_user->password = bcrypt($request->input('inputPassword'));
        $add_user->phone_number = $request->input('inputPhoneNumber');
        $add_user->gender = $request->input('inputSex');
        if ($request->hasFile('inputFileImage')) {
            $image = $request->file('inputFileImage');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('public/upload'), $image_name);
            $add_user->avatar = $image_name;
        }
        $add_user->save();
        return redirect()->back()->with('alert', 'Đã thêm thành công!');
    }
    public function page_author()
    {
        $show_user = User::where('role_id', 2)->latest()->paginate(5);
        return view('admin_page.page_author', ['show_user' => $show_user]);
    }
    public function page_admin()
    {
        $show_user = User::where('role_id', 1)->latest()->paginate(5);
        return view('admin_page.page_admin', ['show_user' => $show_user]);
    }
    public function delete_user($id)
    {
        User::destroy($id);
        return redirect()->back()->with('alert', 'Xóa thành công');
    }
    //Duyệt bài viết
    public function check_post($id)
    {
        DB::table('posts')->where('id', $id)->update(['post_status' => 1]);
        return redirect()->back();
    }
    //Hủy bài viết
    public function cancel_post($id)
    {
        DB::table('posts')->where('id', $id)->update(['post_status' => 0]);
        return redirect()->back();
    }
    public function post_add_role_access(Request $request)
    {
        $add_role = new RoleAccess();
        $add_role->role_name = $request->input('inputRoleName');
        $add_role->permission = $request->input('inputDescript');
        $add_role->save();
        return redirect()->back()->with('alert', 'Đã thêm thành công!');
    }
    public function update_role($id){

    }
}
