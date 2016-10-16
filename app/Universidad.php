<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = "universidades";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'lema', 'escudo', 'url', 'direccion'
    ];


    public function direccion(){
        return $this->belongsTo('App\Ubicacion');
    }
   
}
