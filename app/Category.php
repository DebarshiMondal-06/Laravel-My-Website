<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $guarded = [];



    public function setSlugAttribute($value) {
      $this->attributes['slug'] = strtolower($value);
   }

   public function setNameAttribute($value) {
      $this->attributes['name'] = ucfirst($value);
   }


}
