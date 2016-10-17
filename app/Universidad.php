<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidades extends Model
{
    protected $table = "universidades";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'lema', 'escudo', 'url', 'direccion','ciudad'
    ];


    public function ciudad(){
        return $this->belongsTo('App\Ubicacion');
    }
   
}
