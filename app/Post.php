<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   //
   protected $guarded = [];

   public function user()
   {
      return $this->belongsTo(User::class);
   }

   public function categories() {
      return $this->belongsTo(Category::class);
   }

   // public function setStatusAttribute() {
   //    $this->attributes['Status'] = "Not Published";
   // }

   public function getPostImageAttribute($value)
   {
      return asset('public/storage/' . $value);
   }
}
