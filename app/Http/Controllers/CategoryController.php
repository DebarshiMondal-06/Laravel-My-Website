<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
class CategoryController extends Controller
{
      //

   public function create() {
      Category::create([
         'name' => request('category'),
         'slug' => request('category'),
         'user_id' => auth()->user()->id
      ]);
      Session::flash('success','Category Successfully Created!');
      return back();
   }

   public function  category() {
      $category_fetch = Category::all();
      return view('Admin.create_categories',['category'=>$category_fetch]);
   }

   public function delete(Category $id) {
      if (!($id->user_id == auth()->user()->id))
      {
         return back();
      }
      else {
         $id->delete();
         return back();
      }


   }
}
