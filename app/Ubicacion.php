<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{

	protected $table = "ubicaciones";
	protected $fillable = ['direccion', 'ciudad','pais','longitud','latitud'];
    
	// Una direccion pertenece a una universidad o a una habitacion
    public function universidad(){
    	return $this->hasOne('App\Universidad');
    }

    public function habitacion(){
    	return $this->hasOne('App\Habitacion');
    }
}
