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

Route::get('/', function () {
    return view('category');
})->name('/');

Auth::routes();

Route::middleware('auth')->group(function(){
   Route::get('/dashboard', 'AdminController@index')->name('admin_dashboard');
   Route::get('/view-users', 'AdminController@view_users')->name('view_users');

});


Route::middleware(['auth','web'])->group(function() {
   Route::post('/create_category','CategoryController@create')->name('create-category');
   Route::get('/create-view-categories','CategoryController@category')->name('view-create-category');
   Route::delete('/create-view-categories/{id}','CategoryController@delete')->name('delete-category');
});
