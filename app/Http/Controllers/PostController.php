<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
class PostController extends Controller
{
   //
   public function add_posts() {
      $category = Category::all();
      return view('Post.Post_content', compact('category'));
   }

   public function store() {
      $input = request()->validate([
         'post_image' => 'file| required',
         'content' => 'required',
         'MainTitle' => 'required',
         'categories_id' => 'required'
      ]);

      if(request('post_image')) {
         $input['post_image'] = request('post_image')->store('uploads');
      }
      auth()->user()->posts()->create($input);
      return redirect()->route('view-blog');
   }

   public function view_blog() {
      $post = Post::Where('Status',NULL)->get();
      return view('Post.view-blog-content',compact('post'));
   }

   public function publish(Post $id) {
      $id->Status = "Published";
      $id->save();
      return back();
   }


   public function Published_blog() {
      $post_published = Post::Where('Status','Published')->get();
      return view('Post.published_blog',compact('post_published'));
   }

   public function delete(Post $id) {
      if((auth()->user()->id == $id->user_id))
      {
         $path = public_path(). '/storage/' . $id->post_image;
         if(file_exists($path)) {
            unlink($path);
            $id->delete();
            return back();
         }
      }
      else {
         return back();
      }

   }



















}
