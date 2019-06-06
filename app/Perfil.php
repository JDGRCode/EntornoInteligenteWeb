<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = "perfiles";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $fillable =[
        'componentes_id',
        'estados_id',
        'usuarios_id',


        ];
}
