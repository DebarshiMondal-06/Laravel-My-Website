<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
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
      $post_fetch = Post::all();
      return view('Admin.create_categories',[
         'category'=>$category_fetch,
         'posts'=>$post_fetch
      ]);
   }

   public function edit($id) {
      request()->validate([
         'name' => 'required | min:5',
      ]);
      $category = Category::find($id);
      $category->name = request('name');
      $category->slug = request('name');
      $category->save();
      return back();
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

   public function modal($id) {
      $view_category_name = Category::where('id',$id)->first();
      $view_modal = Post::where('categories_id',$id)->get();
      return view('Post.single-category-view',compact('view_modal','view_category_name'));
   }
}
