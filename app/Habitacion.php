<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Habitacion as Authenticatable;

class Habitacion extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'precio','calificacion','estado','user_id','direccion'];

    public function user(){
        return $this->belongsTo('App\User')
    }

    public function direccion(){
        return $this->belongsTo('App\Ubicacion');
    }

    public function imagenes(){
        return $this->hasMany('App\Imagen');
    }
}
