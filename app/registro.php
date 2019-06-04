<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    public $timestamps = false;
    protected $table = 'registro';
    protected $fillable = [

        'id',
        'componente',
        'horarios_id',
        'usuario_id',
        'comp_id'
        ];

        public function Usuario()
        {
            return $this->belongsToMany('App\usuario');
        }
}
