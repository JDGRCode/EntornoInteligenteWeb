<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table="perfilesalarma";
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'nomalarma',
        'rolalarma',
        'usuario_id'
        
    ];
}
