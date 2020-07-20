<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Category;
use App\Post;
class AdminController extends Controller
{
   //

   public function index() {
      $users = User::all();
      $roles = Role::get();
      $category = Category::get();
      $post = Post::get();
      return view('Admin.dashboard', compact([
         'users','roles','category','post'
      ]));
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

   public function view_roles_user() {
      $user_roles = User::all();
      return view('Admin.View-user-roles',['users'=>$user_roles]);
   }


}
