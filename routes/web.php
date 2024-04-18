<?php

use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\OrderController;



Route::any('/', [HomeController::class, 'home'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('contact-us', [HomeController::class, 'contact'])->name('contact');
Route::post('contact-us', [ContactFormController::class, 'contact_form_submit'])->name('contact_form_submit');

Route::get('blog/details/{slug}', [HomeController::class, 'blog_detail'])->name('blog_detail');

Route::get('order/form', [OrderController::class, 'order_form'])->name('order_form');
Route::post('order/submit', [OrderController::class, 'store_order'])->name('store_order');
Route::get('feedback/{order_id}', [OrderController::class, 'OrderFeedback'])->name('order_feedback');
Route::post('feedback/{order_id}', [OrderController::class, 'SaveOrderFeedback'])->name('save_order_feedback');


Route::get('login', [AuthController::class, 'login'])->middleware('check-session')->name('login');
Route::post('auth-login', [AuthController::class, 'auth_login'])->name('auth_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'create']);

Route::get('verify/{token}', [AuthController::class, 'verify']);

Route::get('forgot-password', [AuthController::class, 'forgot']);
Route::post('forgot-password', [AuthController::class, 'forgot_password']);

Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'post_reset']);


Route::middleware('adminregister')->group(function () {
    Route::get('/admin/register', [AuthController::class, 'AdminRegistrationForm'])->name('admin_registration_form');
    Route::post('/admin/register', [AuthController::class, 'AdminRegister'])->name('admin_register');
});

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('user/list', [UserController::class, 'user'])->name('user');
    Route::get('user/add', [UserController::class, 'add_user'])->name('add_user');
    Route::post('user/add', [UserController::class, 'insert_user'])->name('insert_user');
    Route::get('user/edit/{id}', [UserController::class, 'edit_user'])->name('edit_user');
    Route::post('user/edit/{id}', [UserController::class, 'update_user'])->name('update_user');
    Route::get('user/delete/{id}', [UserController::class, 'delete_user'])->name('delete_user');

    Route::get('category/list', [CategoryController::class, 'category'])->name('category');
    Route::get('category/add', [CategoryController::class, 'add_category'])->name('add_category');
    Route::post('category/add', [CategoryController::class, 'insert_category'])->name('insert_category');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit_category'])->name('edit_category');
    Route::post('category/edit/{id}', [CategoryController::class, 'update_category'])->name('update_category');
    Route::get('category/delete/{id}', [CategoryController::class, 'delete_category'])->name('delete_category');

    Route::get('blog/list', [BlogController::class, 'blog'])->name('blog_list');
    Route::get('blog/add', [BlogController::class, 'add_blog'])->name('add_blog');
    Route::post('blog/add', [BlogController::class, 'insert_blog'])->name('insert_blog');
    Route::get('blog/edit/{id}', [BlogController::class, 'edit_blog'])->name('edit_blog');
    Route::post('blog/edit/{id}', [BlogController::class, 'update_blog'])->name('update_blog');
    Route::get('blog/delete/{id}', [BlogController::class, 'delete_blog'])->name('delete_blog');

    Route::post('blog/list/search', [BlogController::class ,'blog_search'])->name('blog_search');

    Route::get('page/list', [PageController::class, 'page'])->name('page');
    Route::get('page/add', [PageController::class, 'add_page'])->name('add_page');
    Route::post('page/add', [PageController::class, 'insert_page'])->name('insert_page');
    Route::get('page/edit/{id}', [PageController::class, 'edit_page'])->name('edit_page');
    Route::post('page/edit/{id}', [PageController::class, 'update_page'])->name('update_page');
    Route::get('page/delete/{id}', [PageController::class, 'delete_page'])->name('delete_page');

    Route::get('gallery/list', [GalleryImageController::class, 'gallery_images'])->name('gallery_images');
    Route::get('gallery/add', [GalleryImageController::class, 'add_image'])->name('add_image');
    Route::post('gallery/add', [GalleryImageController::class, 'insert_image'])->name('insert_image');
    Route::get('gallery/edit/{id}', [GalleryImageController::class, 'edit_image'])->name('edit_image');
    Route::post('gallery/update/{id}', [GalleryImageController::class, 'update_image'])->name('update_image');
    Route::get('gallery/delete/{id}', [GalleryImageController::class, 'delete_image'])->name('delete_image');

    Route::get('slider/list', [SliderController::class, 'slider'])->name('slider');
    Route::get('slider/add', [SliderController::class, 'add_slider'])->name('add_slider');
    Route::post('slider/add', [SliderController::class, 'insert_slider'])->name('insert_slider');
    Route::get('slider/edit/{id}', [SliderController::class, 'edit_slider'])->name('edit_slider');
    Route::post('slider/update/{id}', [SliderController::class, 'update_slider'])->name('update_slider');
    Route::get('slider/delete/{id}', [SliderController::class, 'delete_slider'])->name('delete_slider');

    Route::get('services/list', [ServicesController::class, 'services'])->name('services');
    Route::get('services/add', [ServicesController::class, 'add_services'])->name('add_services');
    Route::post('services/insert', [ServicesController::class, 'insert_services'])->name('insert_services');
    Route::get('services/edit/{id}', [ServicesController::class, 'edit_services'])->name('edit_services');
    Route::post('services/update/{id}', [ServicesController::class, 'update_services'])->name('update_services');
    Route::get('services/delete/{id}', [ServicesController::class, 'delete_services'])->name('delete_services');

    Route::get('order/list', [OrderController::class, 'order'])->name('order');
//    Route::post('services/insert', [ServicesController::class, 'insert_services'])->name('insert_services');
    Route::get('order/done/{id}', [OrderController::class, 'OrderDone'])->name('order_done');
//    Route::post('services/update/{id}', [ServicesController::class, 'update_services'])->name('update_services');
    Route::get('order/delete/{id}', [OrderController::class, 'delete_order'])->name('delete_order');


    Route::get('inbox/list', [ContactFormController::class, 'inbox'])->name('inbox');
//    Route::get('page/add', [PageController::class, 'add_page'])->name('add_page');
//    Route::post('page/add', [PageController::class, 'insert_page'])->name('insert_page');
//    Route::get('page/edit/{id}', [PageController::class, 'edit_page'])->name('edit_page');
//    Route::post('page/edit/{id}', [PageController::class, 'update_page'])->name('update_page');

    Route::get('change-password', [ChangePasswordController::class, 'edit_password'])->name('edit_password');
    Route::post('change-password', [ChangePasswordController::class, 'update_password'])->name('update_password');

    Route::get('account-setting', [AccountSettingController::class, 'AccountSetting'])->name('account_setting');
    Route::post('account-setting', [AccountSettingController::class, 'UpdateAccountSetting'])->name('update_account_setting');


    Route::post('blog/comment', [HomeController::class, 'blog_comment'])->name('blog_comment');
    Route::post('blog/comment/reply', [HomeController::class, 'blog_comment_reply'])->name('blog_comment_reply');


});

//Route::group(['middleware' => 'adminuser', 'prefix' => 'user'], function () {
//
//    });


