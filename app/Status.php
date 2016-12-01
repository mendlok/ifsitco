<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  protected $table = 'status';
  protected $fillable = [
    'id','created_at','updated_at'
  ];
}
