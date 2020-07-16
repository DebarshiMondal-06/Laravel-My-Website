<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
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


   public function assign_roles(User $id) {
      $roles = Role::all();
      return view('Admin.assign-roles',compact([
         'id','roles'
      ]));
   }

   public function assigned(User $id){
      $id->roles()->attach(request('role'));
      return back();
   }

   public function detached(User $id) {
      $id->roles()->detach(request('role_delete'));
      return back();
   }



}
