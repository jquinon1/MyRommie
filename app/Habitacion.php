<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table = "habitaciones";
    
    protected $fillable = [ 'precio','calificacion','estado','user_id','direccion','ciudad','longitud','latitud','descripcion'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function ciudad(){
        return $this->belongsTo('App\Ubicacion');
    }

    public function imagenes(){
        return $this->hasMany('App\Imagen');
    }
}
