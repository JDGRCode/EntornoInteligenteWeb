<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $table = "estados";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'estado',
        'atrixtipo_id'
        ];

    public static function estados($id){
        return Estados::where('atrixtipo_id','=',$id)->get();
    }
        
  
}

