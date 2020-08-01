<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
class LikeController extends Controller
{
   //
   public function like(){
      Like::create([
         'user_id' => auth()->user()->id,
         'post_id' => request('postid')
      ]);

      return back();
   }

   public function dislike(Like $id) {
      $id->delete();
      return back();
   }
}
