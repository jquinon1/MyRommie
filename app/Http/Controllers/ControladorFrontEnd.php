<?php

namespace App\Http\Controllers;

use App\Universidades;
use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\Ubicacion;
use App\Universidad;
//use App\Habitacion;
use Auth;

class ControladorFrontEnd extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['arrendador','estudiante']]);
    }
    public function contacto(){
      return view('contactanos');
    }

    public function acerca(){
      return view('acercade');
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

      /*$ida= DB::select('select * from habitaciones where direccion = :dir', ['dir' => $dir]);
      foreach ($ida as $key) {
        $id=$key->id;
      }*/

      $hab = DB::select('select * from habitaciones');
      $dirs=array();
      $lats=array();
      $longs=array();
      $prixes=array();
      $ids=array();
      $imgs=array();
      foreach ($hab as $key) {
        $dirs[]=$key->direccion;
        $lats[]=$key->latitud;
        $longs[]=$key->longitud;
        $prixes[]=$key->precio;
        $ids[]=$key->id;
        $imgs[]=DB::table('imagenes')->select('name')->where('habitacion_id', $key->id)->first();
      }

      return view('map', ['dirs' => $dirs, 'lats' => $lats, 'longs' => $longs, 'name' => $names, 'lema' => $lemas, 'escudo' => $escudos, 'pagina' => $paginas, 'lat' => $latitudes, 'lng' => $longitudes, 'imgs'=>$imgs, 'prixes'=>$prixes, 'ids'=>$ids]);//, 'id'=>$id]);
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

      //$dir= str_replace("#", "", $dir);
      $ubic=array();
      $pais=array();

      $ida= DB::select('select * from habitaciones where direccion = :dir', ['dir' => $dir]);
      //dd($dir);
      foreach ($ida as $key) {
        $id=$key->id;
        $ubic=DB::table('ubicaciones')->select('ciudad')->where('id', $key->ubicacion_id)->first();
        $pais=DB::table('ubicaciones')->select('pais')->where('id', $key->ubicacion_id)->first();
      }

      $hab = DB::select('select * from habitaciones');
      $dirs=array();
      $lats=array();
      $longs=array();
      $prixes=array();
      $ids=array();
      $imgs=array();
      foreach ($hab as $key) {
        $dirs[]=$key->direccion;
        $lats[]=$key->latitud;
        $longs[]=$key->longitud;
        $prixes[]=$key->precio;
        $ids[]=$key->id;
        $imgs[]=DB::table('imagenes')->select('name')->where('habitacion_id', $key->id)->first();//('select name from imagenes where habitacion_id = :id', ['id' => $key->id], 1);
      }
      //$dir=str_replace(("_"), "#", $dir);
      return view('map2', ['dir' => $dir, 'dirs' => $dirs, 'lats' => $lats, 'longs' => $longs, 'name' => $names, 'lema' => $lemas, 'escudo' => $escudos, 'pagina' => $paginas, 'lat' => $latitudes, 'lng' => $longitudes, 'id'=>$id, 'imgs'=>$imgs, 'prixes'=>$prixes, 'ubic'=>$ubic, 'pais'=>$pais, 'ids'=>$ids]);
    }

    public function habitacion(){
      $hab = DB::select('select * from habitaciones');
      $foto=array();
      $prix=array();
      $desc=array();
      $dirs=array();
      foreach ($hab as $key) {
        $foto[]=$key->foto;
        $prix[]=$key->precio;
        $desc[]=$key->descripcion;
        $dirs[]=$key->direccion;
      }
      return view('habitacion', ['fotos' => $foto, 'precios' => $prix, 'text' => $desc, 'dirs' => $dirs]);
    }

    public function habitacion2($id){
      //$hab="nada";
      $hab = DB::select('select * from habitaciones where id = :id', ['id' => $id]);
      $name="";
      //$dir="no tiene";
      //$precio="no tiene";
      foreach($hab as $w){
      //   $name = $w->foto;
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
        $ubicacion = Ubicacion::orderBy('id','asc')->pluck('ciudad','id');
        $universidad = Universidad::orderBy('id','asc')->pluck('nombre','id');

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
