<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
class HomeController extends Controller
{
   /**
   * Create a new controller instance.
   *
   * @return void
   */
   // public function __construct()
   // {
   //     $this->middleware('auth');
   // }

   /**
   * @return \Illuminate\Contracts\Support\Renderable
   */

   public function index() {
      $category = Category::all();
      $posts = Post::orderby('created_at','DESC')->limit(3)->get();
      return view('Home.index_page',compact('posts','category'));
   }

   public function single_category($id) {
      $category = Category::where('id',$id)->first();
      $single = Post::where('categories_id',$id)->orderby('created_at','DESC')->get();
      $popular_post = Post::where('categories_id',$id)->orderby('created_at','DESC')->take(5)->get();
      if ($single) {
         return view('Home.categories_page',
         [
            'single_blog'=>$single,
            'category'=>$category,
            'popular_post'=>$popular_post
         ]);
      }


   }
   // public function popular_post($id) {
   //    $popular_post = Post::where('categories_id',$id)->orderby('created_at','DESC')->limit(1)->get();
   //    return view('Home.categories_page',['popular_blog'=>$popular_post]);
   // }
}
