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
    protected $fillable = [
        'direccion',  'precio', 'foto',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     *//*
    protected $hidden = [
        'password', 'remember_token',
    ];*/
}
