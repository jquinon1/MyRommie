<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Habitacion extends Model
{
    protected $table = 'habitaciones';

    protected $fillable = ['direccion','longitud','latitud','precio','calificacion','estado','descripcion','foto','user_id','ciudad'];

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

    public function scopeSearch($query,$universidad){
        return $query
        ->join('habitacion_universidad','habitaciones.id','=','habitacion_universidad.habitacion_id')
        ->join('universidades','universidades.id','=','habitacion_universidad.universidad_id')
        ->where('universidades.nombre','LIKE',"%$universidad%")->where('habitaciones.estado','=','desocupado');
    }
}
