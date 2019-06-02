<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'id',
        'horainicio',
        'horafin',
        'perfiles_id'
        ];

  public function x(){
      return $this->belongsTo('App\Usuario');
  }
}
