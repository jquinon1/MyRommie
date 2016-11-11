<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Habitacion extends Model
{
    protected $table = 'habitaciones';

    protected $fillable = ['direccion','longitud','latitud','precio','calificacion','descripcion','user_id','ubicacion_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function ubicacion(){
    	return $this->belongsTo('App\Ubicacion');
    }

    public function imagenes(){
    	return $this->hasMany('App\Imagen');
    }

    public function universidades(){
        return $this->belongsToMany('App\Universidad')->withTimestamps();
    }

    public function ofertas(){
        return $this->hasMany('App\Oferta');
    }

}
