<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoComp extends Model
{
    protected $table = "tipocomp";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $fillable =[
    	'id',
        'nomcomp'

        ];
}
