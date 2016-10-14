<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class ControladorFrontEnd extends Controller
{
    public function index(){
      return view('welcome');
    }

    public function map(){
      return view('map');
    }

    public function habitacion(){
      return view('habitacion');
    }

    public function habitacion2($id){
      //$hab="nada";
      $hab = DB::select('select * from habitaciones where id = :id', ['id' => $id]);
      $name="";
      $dir="";
      foreach($hab as $w){
        $name = $w->foto;
        $dir = $w->direccion;
      }
      return view('habitacion2', ['id' => $id, 'foto' => $name, 'dir' => $dir]);
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
