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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index() {
        $category = Category::all();
        $posts = Post::orderby('created_at','DESC')->limit(3)->get();
        return view('Home.index_page',compact('posts','category'));
     }

     public function single_category($id) {
        $single = Post::where('categories_id',$id)->get();
        return view('Home.categories_page',['single_blog'=>$single]);
     }
}
