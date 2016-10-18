<?php

namespace App\Http\Controllers;

use App\Universidades;
use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\Ubicacion;
use App\Universidad;

class ControladorFrontEnd extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['arrendador','estudiante']]);
    }
    public function index(){
      return view('welcome');
    }

    public function map(){
      $uni = DB::select('select * from universidades');
      $names=array();
      $lemas=array();
      $escudos=array();
      $paginas=array();
      $latitudes=array();
      $longitudes=array();
      foreach ($uni as $key) {
        $names[]= $key->nombre;
        $lemas[]= $key->lema;
        $escudos[]= $key->escudo;
        $paginas[]= $key->pagina;
        $latitudes[]= $key->latitud;
        $longitudes[]= $key->longitud;
      }

      $hab = DB::select('select * from habitaciones');
      $dirs=array();
      $lats=array();
      $longs=array();
      foreach ($hab as $key) {
        $dirs[]=$key->direccion;
        $lats[]=$key->latitud;
        $longs[]=$key->longitud;
      }

      return view('map', ['dirs' => $dirs, 'lats' => $lats, 'longs' => $longs, 'name' => $names, 'lema' => $lemas, 'escudo' => $escudos, 'pagina' => $paginas, 'lat' => $latitudes, 'lng' => $longitudes]);
    }

    public function map2($dir){
      $uni = DB::select('select * from universidades');
      $names=array();
      $lemas=array();
      $escudos=array();
      $paginas=array();
      $latitudes=array();
      $longitudes=array();
      foreach ($uni as $key) {
        $names[]= $key->nombre;
        $lemas[]= $key->lema;
        $escudos[]= $key->escudo;
        $paginas[]= $key->pagina;
        $latitudes[]= $key->latitud;
        $longitudes[]= $key->longitud;
      }

      $hab = DB::select('select * from habitaciones');
      $dirs=array();
      $lats=array();
      $longs=array();
      foreach ($hab as $key) {
        $dirs[]=$key->direccion;
        $lats[]=$key->latitud;
        $longs[]=$key->longitud;
      }

      return view('map2', ['dir' => $dir, 'dirs' => $dirs, 'lats' => $lats, 'longs' => $longs, 'name' => $names, 'lema' => $lemas, 'escudo' => $escudos, 'pagina' => $paginas, 'lat' => $latitudes, 'lng' => $longitudes]);
    }

    public function habitacion(){
      return view('habitacion');
    }

    public function habitacion2($id){
      //$hab="nada";
      $hab = DB::select('select * from habitaciones where id = :id', ['id' => $id]);
      $name="";
      $dir="no tiene";
      $precio="no tiene";
      foreach($hab as $w){
        $name = $w->foto;
        $dir = $w->direccion;
        $precio = $w->precio;
      }
      return view('habitacion2', [ 'foto' => $name, 'dir' => $dir, 'precio' => $precio]);
    }

    public function arrendador(){
      return view('arrendador');
    }

    public function infoarrendador(){
      return view('infoarrendador');
    }

    public function estudiante(){
        $ubicacion = Ubicacion::all();
        $universidad = Universidad::all();

        return view('estudiante')->with('ciudades',$ubicacion)->with('universidades',$universidad);
    }

    public function pm(){
      return view('noProgramada');
    }
    public function store(EstudianteRequest $request){
        $user = new Estudiante($request->all());
        if ($request->precio != "") {
            return view('welcome');
        } else {
            Flash::warning("No se pudo registrar");
            return reditec()->route('users.create');
        }
        Flash::success("Se ha registrado " . $user->name . " existosamente");
        return view('welcome');
    }
}
