<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = "ofertas";

    protected $fillable = ['oferta','user_id','habitacion_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function habitacion(){
    	return $this->belongsTo('App\Habitacion');
    }

    public function scopeOfertas($query,$id_habitacion){
    	return $query->where('habitacion_id','=',$id_habitacion);
    }
}
