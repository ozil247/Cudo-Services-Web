<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WelcomeController@welcome')->name('welcome');
Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/blog_detail/{id}/{slug}', 'BlogController@blogDetail')->name('blog_detail');
Route::post('/store_blog_post', 'BlogController@storeBlog')->name('store_blog_post');
Route::get('/view_all_category', 'JobCategoryController@viewAllCategory')->name('view_all_category');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact_message', 'ContactController@contactMessage')->name('contact_message');
Route::post('/{id}/store_comment', 'CommentController@storeComment')->name('store_comment');
Route::get('/services', 'VendorsController@services')->name('services');
Route::get('/about_us', 'AboutController@aboutUs')->name('about.us');
Route::get('/job_categories_detail/{id}', 'JobCategoryController@jobCategoriesDetail')->name('job.categories.detail');
Route::get('/search', 'WelcomeController@search')->name('search');
Route::post('/reset_password', 'Auth\ForgotPasswordController@forgotPassword')->name('reset_password');



// type this below "'verify' => true"
Auth::routes([]);


Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'VendorsController@dashboard')->name('dashboard');
    Route::get('/vendors_profile', 'VendorsController@vprofile')->name('vendors_profile');
    Route::post('/update_profile', 'VendorsController@profile')->name('update_profile');
    Route::get('/vendor-details/{name}/{id}','JobCategoryController@vendorDetails')->name('vendor.details');
    Route::get('/provider_detail/{name}/{id}','BookingController@providerDetail')->name('provider.detail');
    Route::post('/booking', 'BookingController@booking')->name('booking');
    Route::get('/my_booking', 'BookingController@myBooking')->name('my.booking');
    Route::get('/create_blog', 'BlogController@createBlog')->name('create.blog.post');
    Route::post('/store_blog_post', 'BlogController@storeBlog')->name('store_blog_post');
    Route::get('/vendors', 'VendorsController@vendorsProfilePics')->name('vendors');
});



Route::prefix('admin')->group(function () {
    Route::get('/admin_dashboard', 'AdminController@admin')->name('admin_dashboard');
    Route::get('/category', 'JobCategoryController@category')->name('category');
    Route::post('/add_category', 'JobCategoryController@addCategory')->name('add_category');
    Route::get('/blog_category', 'BlogcategoryController@blogCategory')->name('blog_category');
    Route::post('/add_blog_category', 'BlogcategoryController@addBlogCategory')->name('add.blog.category');
    Route::get('/all_blog_category', 'BlogcategoryController@allBlogCategory')->name('all.blog.category');
    Route::get('/edit_blog_category/{id}', 'BlogcategoryController@editBlogCategory')->name('edit.blog.category');
    Route::post('/update_blog_category/{id}', 'BlogcategoryController@updateBlogCategory')->name('update.blog.category');
    Route::get('/delete_blog_category/{id}', 'BlogcategoryController@deleteBlogCategory')->name('delete.blog.category');
    Route::get('/all_vendors', 'UserTypeController@allVendors')->name('all.vendors');
    Route::get('/all_users', 'UserTypeController@allUsers')->name('all.users');
    Route::get('/{id}/all_bookings', 'BookingController@allBooking')->name('all.bookings');
    Route::get('/all_contact_messages', 'ContactController@allContactMessages')->name('all.contact.messages');
    Route::get('/all_job_categories', 'JobCategoryController@allJobCategory')->name('all_job_categories');




});
