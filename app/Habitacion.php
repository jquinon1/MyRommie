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

    public function scopeCercaDe($query,$universidad){
        $query = DB::select("select * from habitaciones join habitacion_universidad on habitaciones.id = habitacion_universidad.habitacion_id join universidades on universidades.id = habitacion_universidad.universidad_id where nombre LIKE '%$universidad%' and estado = 'desocupado'");
        return $query;
    }

    public function scopeSearch($query,$universidad){
        // $universi = DB::select('select id as universidad from universidades where nombre like "%$universidad%"');
        // $pivot = DB::select('select habitacion_id from habitacion_universidad where universidad_id in "$universi"');
        // return $query->where('estado','=','desocupado')->whereIn('id',$pivot);
        //->join('universidades','universidades.id','=','habitacion_universidad.universidad_id')->where('universidades.nombre','LIKE',"%$universidad%");
        // return $universidad = DB::table('universidades')->join('habitacion_universidad','universidades.id','=','habitacion_universidad.universidad_id')->join('habitaciones','habitaciones.id','=','habitacion_universidad.habitacion_id')->where('nombre','LIKE',"%$universidad%")->where('estado','=','desocupado');
        // // return DB::table('habitaciones')
        // ->where('estado','=','desocupado');
        return $query->join('habitacion_universidad','habitacion_universidad.habitacion_id','=','habitaciones.id')->where('estado','=','desocupado')->join('universidades','universidades.id','=','habitacion_universidad.universidad_id')->where('nombre','LIKE',"%$universidad%");
        
    }
}
