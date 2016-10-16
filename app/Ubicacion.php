<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{

	protected $fillable = ['direccion', 'ciudad','pais','longitud','latitud'];
    

    public function universidad(){
    	return $this->belongsTo('App\Universidad');
    }

    public function habitacion(){
    	return $this->belongsTo('App\Habitacion');
    }
}
