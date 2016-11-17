<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $fillable = [
      'name', 'last_name', 'birth_date','sex','phone','cellphone','nacionality','provinces','canton','district','address','express'
  ];
  public function users()
   {
       return $this->belongsTo('App\User');
   }
}
