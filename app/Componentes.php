<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Componentes extends Model
{
    protected $table = "componentes";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $fillable =[
        'nombrecomp',
        'tipocomp_id',
        'estado_id',
        'atrixtipo_id'

        ];
    

   
}