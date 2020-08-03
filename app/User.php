<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
   use Notifiable;

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
      'name', 'email', 'password',
   ];

   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
   protected $hidden = [
      'password', 'remember_token',
   ];

   /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];

   public function admin_role($role) {
      foreach ($this->roles as $all_roles) {
         if(Str::lower($role) == Str::lower($all_roles->name)) {
            return true;
         }
      }
   }


   public function roles()
   {
      return $this->belongsToMany('App\Role')->withTimestamps();
   }

   public function posts()
   {
      return $this->hasMany('App\Post');
   }

   public function user_likes()
   {
      return $this->hasMany('App\Like');
   }




}
