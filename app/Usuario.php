<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    // protected $primaryKey = "IdUsuario";
    protected $fillable = [
        'nomusuario',
        'apeusuario',
        'telefono',
        'rol_id'
        ];
}
