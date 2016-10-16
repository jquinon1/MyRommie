<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{

	protected $table = "imagenes";
	
    protected $fillable = ['name','habitacion_id'];

    public function habitacion(){
    	return $this->belongsTo('App\Habitacion');
    }
}
