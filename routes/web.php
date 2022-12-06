<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeConTroller;
use App\Http\Controllers\SocialConTroller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeConTroller::class, 'index']);
Route::post('post-signup', [HomeConTroller::class, 'add_user']);
Route::post('post-login', [HomeConTroller::class, 'post_login']);
Route::get('logout', [HomeConTroller::class, 'logout']);
Route::get('/page-contact', [HomeConTroller::class, 'page_contact']);
Route::get('/page-author/{id}', [HomeConTroller::class, 'page_author']);
Route::get('/post-detail/{id}', [HomeConTroller::class, 'post_detail']);
Route::get('list-post/{id}', [HomeController::class, 'list_post']);
Route::get('about-us', [HomeController::class, 'about_us']);
Route::get('profile-info/{id}', [HomeController::class, 'profile_info']);
Route::put('change-profile/{id}', [HomeController::class, 'change_profile']);
Route::get('/post-author/{id}', [HomeController::class, 'page_author']);
// Đăng nhập google
Route::get('auth/redirect/{provider}', [HomeController::class, 'redirect']);
Route::get('callback/{provider}', [HomeController::class, 'callback']);

Route::post('post-feedback', [HomeController::class, 'post_feedback'])->name('post.feedback');

// ----------------PAGE ADMIN ------------------------------//
Route::get('page-login-admin', function () {
    return view('admin_page.page_login_admin');
});
Route::post('post-login-admin', [AdminController::class, 'post_login_admin']);
Route::get('logout-admin', [AdminController::class, 'logout_admin']);

Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/page-admin', [AdminController::class, 'index']);
    Route::get('/role-access', [AdminController::class, 'role_access']);
    Route::post('/post-add-role-access', [AdminController::class, 'post_add_role_access']);
    Route::get('/page-guest', [AdminController::class, 'page_guest']);
    Route::get('/page-author', [AdminController::class, 'page_author']);
    Route::get('/administrator', [AdminController::class, 'page_admin']);
    Route::get('/delete-user/{id}', [AdminController::class, 'delete_user']);
    Route::get('/page-category', [AdminController::class, 'page_category']);
    Route::post('/post-add-category', [AdminController::class, 'post_add_category']);
    Route::get('delete-category/{id}', [AdminController::class, 'delete_category']);
    Route::get('page-post', [AdminController::class, 'page_post']);
    Route::get('page-add-post', [AdminController::class, 'page_add_post']);
    Route::post('add-posts', [AdminController::class, 'add_posts']);
    Route::get('delete-post/{id}', [AdminController::class, 'delete_post']);
    Route::get('page-profile/{id}', [AdminController::class, 'page_profile']);
    Route::get('change-pass/{id}', [AdminController::class, 'change_pass']);
    Route::post('post-add-user', [AdminController::class, 'post_add_user']);
    Route::put('update-profile/{id}', [AdminController::class, 'update_profile']);
    Route::put('update-role/{id}', [AdminController::class, 'update_role']);
    Route::get('update-password/{id}', [AdminController::class, 'update_password']);
    Route::get('check-post/{id}', [AdminController::class, 'check_post']);
    Route::get('cancel-post/{id}', [AdminController::class, 'cancel_post']);
});
