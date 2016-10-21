<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = "ofertas"

    protected $fillable = ['user_id','habitacion_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function habitacion(){
    	return $this->belongsTo('App\Habitacion');
    }
}
