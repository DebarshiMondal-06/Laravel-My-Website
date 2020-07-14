<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    //

    public function index() {
      $users = User::all();
      return view('Admin.dashboard', compact('users'));
   }

   public function view_users() {
      $view_users = User::all();
      return view('Admin.View_Users', compact('view_users'));
   }


}
