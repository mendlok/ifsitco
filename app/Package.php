<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
  protected $fillable = [
      ' id', 'courrier', 'tracking','shop','product_description','value'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }
  public function bill()
 {
     return $this->hasOne('App\Bill');
 }
}
