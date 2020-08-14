<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index() {
      return view('User.user-dashboard');
   }

   public function create() {
      return view('User.user_post_create');
   }

   public function post_view() {
      return view('User.user_blog_post');
   }
}
