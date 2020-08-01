<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
   //

   protected $guarded = [];
   
   public function posts() {
      return $this->belongsTo(Post::class);
   }

   public function users() {
      return $this->belongsTo(User::class);
   }
}
