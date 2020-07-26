<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
class PostController extends Controller
{
   //
   public function view_blogs(){
      $all_blogs = Post::orderBy('created_at','DESC')->get();
      return view('Post.view-all-blogs',compact('all_blogs'));
   }

   public function add_posts() {
      $category = Category::all();
      return view('Post.Post_content', compact('category'));
   }

   public function store() {
      $input = request()->validate([
         'post_image' => 'file| required | max:100',
         'content' => 'required',
         'MainTitle' => 'required',
         'categories_id' => 'required'
      ]);

      if(request('post_image')) {
         $input['post_image'] = request('post_image')->store('uploads');
      }
      auth()->user()->posts()->create($input);
      return redirect()->route('view-blog-not');
   }

   public function view_blog_not() {
      $post = Post::Where('Status',NULL)->get();
      return view('Post.view-blog-content',compact('post'));
   }

   public function publish($id) {
      $change = Post::where('id',$id)->first();
      $change->Status = "Published";
      $change->slug = Str::slug($change->MainTitle, '-');
      $change->save();
      return back();
   }


   public function Published_blog() {
      $post_published = Post::Where('Status','Published')->orderBy('created_at','DESC')->get();
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
