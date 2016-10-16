<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = "imagenes";
    
    protected $fillable = [ 'precio','calificacion','estado','user_id','direccion'];

    public function user(){
        return $this->belongsTo('App\User')
    }

    public function direccion(){
        return $this->belongsTo('App\Ubicacion');
    }

    public function imagenes(){
        return $this->hasMany('App\Imagen');
    }
}
