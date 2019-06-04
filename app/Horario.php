<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    public $timestamps = false;
    protected $table = 'horarios';
    protected $fillable = [
        'id',
        'horainicio',
        'horafin',
        'perfiles_id'
        ];

        public function Registro()
        {
            return $this->belongsToMany('App\registro');
        }
}
