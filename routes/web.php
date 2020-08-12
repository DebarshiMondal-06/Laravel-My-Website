<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/','HomeController@index')->name('/');
Route::get('/categories-for-blog/{slug}','HomeController@single_category')->name('single_category');
Route::get('/about-me','HomeController@about_me')->name('about_me');
Route::post('/about-me/mail','MailController@mailsend')->name('mailsend');

Auth::routes(['verify' => true]);

Route::middleware(['auth','verified'])->group(function() {
   Route::get('/categories-for-blog/{category}/{title}','HomeController@readmore_single')->name('readmore');
   Route::post('/categories-for-blog/single/liked','LikeController@like')->name('post_like');
   Route::delete('/categories-for-blog/single/dislike/{id}','LikeController@dislike')->name('post_dislike');
});

Route::middleware(['auth' , 'verified'])->group(function(){
   Route::get('/dashboard/mail/{id}', 'MailController@mail_checked')->name('mail_checked');
   Route::get('/all-mail', 'MailController@all_mail')->name('all_Mail');

   Route::get('/dashboard', 'AdminController@index')->name('admin_dashboard');
   Route::get('/view-users', 'AdminController@view_users')->name('view_users');
   Route::get('/assign-roles/{id}','AdminController@assign_roles')->name('assign-role');
   Route::put('/assign-roles/assigned/{id}','AdminController@assigned')->name('assigned');
   Route::delete('/assign-roles/detached/{id}','AdminController@detached')->name('detached');
   Route::get('/view-user-roles','AdminController@view_roles_user')->name('view-user-roles');

});


Route::middleware('auth')->group(function() {
   Route::get('/add-posts','PostController@add_posts')->name('add-posts');
   Route::post('/add-posts/check','PostController@store')->name('checked');
   Route::get('/not-published-blog','PostController@view_blog_not')->name('view-blog-not');
   Route::put('/view-blog/publish-this-blog/{id}','PostController@publish')->name('publish');
   Route::get('/view-blog/published-blogs','PostController@Published_blog')->name('published-blog-view');
   Route::get('/view-all-blogs','PostController@view_blogs')->name('total-blogs');
   Route::delete('/view-all-blogs/{id}','PostController@delete')->name('delete-blog');
});

Route::middleware(['auth','web'])->group(function() {
   Route::post('/create_category','CategoryController@create')->name('create-category');
   Route::get('/create-view-categories','CategoryController@category')->name('view-create-category');
   Route::delete('/create-view-categories/{id}','CategoryController@delete')->name('delete-category');
   Route::get('/create-view-categories/{id}','CategoryController@modal')->name('modal-view');
   Route::put('/create-view-categories/{id}','CategoryController@edit')->name('edit_c');
});

Route::middleware('auth')->group(function() {
   Route::get('/view-roles','RoleController@index')->name('role-view');
   Route::post('/create-roles','RoleController@create')->name('create-role');
   Route::delete('/create-roles/{id}','RoleController@delete')->name('delete-role');
});
