<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  protected $fillable = [
      'id','date_received', 'number_pieces', 'declared_value','weigth','heigth','long','width','description','insurance','freights','tax','express','discount','total'
  ];

  protected $hidden = [
      'created_at', 'updated_at',
  ];
  public function packages()
    {
        return $this->belongsTo('App\Package');
    }
}
