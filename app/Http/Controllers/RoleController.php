<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Session;
class RoleController extends Controller
{
    //

    public function index() {
      $roles = Role::all();
      return view('Admin.create_roles',compact('roles'));
   }

   public function create() {
      Role::create([
         'name' => request('role'),
         'slug' => request('role'),
         'user_id' => auth()->user()->id
      ]);

      Session::flash('success','Role Created Successfully');
      return back();
   }

   public function delete(Role $id) {
      if (($id->user_id == auth()->user()->id)) {
         $id->delete();
         Session::flash('delete','Role Successfully Deleted');
         return back();
      }
      else {
         return back();
      }
   }
}
