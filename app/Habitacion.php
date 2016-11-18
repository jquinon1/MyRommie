<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function scopeBuscar($query,$info){
        // dd($info);
        return $query->where('ubicacion_id','=',$info['ubicacion'])->where('precio','<=',$info['precio'])->join('habitacion_universidad','habitacion_universidad.habitacion_id','=','habitaciones.id')
            ->where('habitacion_universidad.universidad_id','=',$info['universidad'])
            ->join('users','users.id','=','habitaciones.user_id')
            ->where('users.genero','=',$info['genero'])->get();
    }

}
