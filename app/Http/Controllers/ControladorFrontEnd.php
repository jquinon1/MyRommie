<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ControladorFrontEnd extends Controller
{
    public function index(){
      return view('welcome');
    }

    public function map(){
      return view('map');
    }

    public function habitacion(){
      //$hab = 'habitacion/'.index;
      return view('habitacion');
    }

    public function habitacion2($id){
      //$hab = 'habitacion/'.index;
      return view('habitacion2', ['id' => $id]);
    }

    public function arrendador(){
      return view('arrendador');
    }

    public function estudiante(){
      return view('estudiante');
    }

    public function pm(){
      return view('noProgramada');
    }
}
