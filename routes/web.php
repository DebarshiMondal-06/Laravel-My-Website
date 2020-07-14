<?php

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

Route::get('/', function () {
    return view('category');
});

Auth::routes();

Route::middleware('auth')->group(function(){
   Route::get('/dashboard', 'AdminController@index')->name('admin_dashboard');
   Route::get('/view-users', 'AdminController@view_users')->name('view_users');
});
