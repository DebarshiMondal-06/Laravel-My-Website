<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Session;
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
      $categories = Category::all();
      $posts = Post::where('Status','Published')->orderby('created_at','DESC')->limit(5)->get();
      return view('Home.index_page',compact('posts','categories'));
   }

   public function single_category($slug) {
      $categories = Category::all();
      $category = Category::where('slug',$slug)->first();
      $single = Post::where(['categories_id'=>$category->id,'Status'=>'Published'])->orderby('created_at','DESC')->get();
      $popular_post = Post::where(['categories_id'=>$category->id,'Status'=>'Published'])->orderby('created_at','DESC')->take(5)->get();
      if ($single) {
         return view('Home.categories_page',
         [
            'single_blog'=>$single,
            'category'=>$category,
            'popular_post'=>$popular_post,
            'categories'=>$categories
         ]);
      }
   }


   public function readmore_single($id){
      $readmore = Post::where('slug',$id)->first();
      $categories = Category::all();
      if($readmore)
      {
         $blogKey = 'blog_'. $readmore->id;
         if(!Session::has($blogKey)) {
            $readmore->increment('post_view');
            Session::put($blogKey,1);
         }
         return view('Home.single-blog',compact('readmore','categories'));
      }
      else {
         return back();
      }

   }








}
