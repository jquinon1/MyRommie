<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = "caracteristicas";

    protected $fillable = ['nombre'];

    public function users(){
    	return $this->belongsToMany('App\User')->withTimestamps();
    }
}
