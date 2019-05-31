<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Componentes extends Model
{
    protected $table = "componentes";
    protected $primarykey = "Idcomp";
    public $timestamps = false;
    protected $fillable =[
        'Idcomp',
        'Nombrecomp',
        'Idtipocomp'

        ];
    

   
}