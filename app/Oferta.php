<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = "ofertas";

    protected $fillable = ['oferta','user_id','habitacion_id','estado'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function habitacion(){
    	return $this->belongsTo('App\Habitacion');
    }

    public function waiting(){
        return $this->estado === 'espera';
    }

}
