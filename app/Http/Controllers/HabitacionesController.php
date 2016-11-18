<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Http\Requests;

use App\Http\Requests\HabitacionRequest;

use Laracasts\Flash\Flash;

use App\Habitacion;

use App\Ubicacion;

 use App\Universidad;

use App\Imagen;
?>
<!--html>
<div>
    <input id="latitud" type="hidden" value=6.2359>
    <input id="longitud" type="hidden" value=-75.5751>
</div>
<script LANGUAGE="JavaScript">
    geocoder.geocode({'address': direccion, componentRestrictions: {
                country: 'CO',
                locality: 'medellin'
              }
            }, function(results, status) {
              if (status === google.maps.GeocoderStatus.OK) {
                  var marker = new google.maps.Marker({
                  map: resultsMap,
                  position: results[0].geometry.location
                  });
                  markers.push(marker);
                  resultsMap.panTo(results[0].geometry.location);
                  resultsMap.setZoom(15);
                  posada=results[0].geometry.location;
              } else {
                if(status = "OVER_QUERY_LIMIT"){
                  alert("Lo sentimos intentelo de nuevo unos segundos mas tarde");
                  i=dirs.length;
                }else{
                  alert('Geocode no pudo encontrar su dirección debido a: ' + status);
                }
              }
            });
</script>
</html-->
<?php

class HabitacionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show','index']]);
        $this->middleware('arrendador', ['except' =>  ['show','index','calificar','buscar']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            if(isset($request->universidad) && strlen($request->universidad) > 0){
                $universidad = Universidad::search($request->universidad)->first();
                $habitaciones = $universidad->habitaciones()->paginate(12);
                if(count($habitaciones) == 0){
                    Flash::info('No hay habitaciones cercarnas a '$universidad->nombre);
                }
            }else{
                $habitaciones = Habitacion::orderBy('created_at','DES')->paginate(12);
            }
        return view('users.habitaciones.index')->with('habitaciones',$habitaciones);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $ubicaciones = Ubicacion::orderBy('id','ASC')->pluck('ciudad','id'); 
        $universidades = Universidad::orderBy('id','ASC')->pluck('nombre','id');
        // dd($universidades);
        return view('users.habitaciones.create')->with('ciudades',$ubicaciones)->with('universidades',$universidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HabitacionRequest $request)
    {

        // dd($request->all());
        $dir = str_replace(" ", "_", $request->direccion);
        $dir = str_replace("#", "_", $dir);
        // dd($dir);
        $habitacion = new Habitacion($request->all());
        $ciudad = Ubicacion::find($request->ubicacion);
        // dd($ciudad);
        $habitacion->ubicacion()->associate($ciudad);
        //dd($request->file('imagen')->extension());
        if($request->file('imagen') && ($request->file('imagen')->extension() == 'png' || $request->file('imagen')->extension() == 'jpg' || $request->file('imagen')->extension() == 'jpeg' )){
            $file = $request->file('imagen');
            $name = 'myrommie_'.time() . '.'.$file->getClientOriginalExtension();
            $path = public_path() . '/images/habitaciones';
            $file->move($path,$name);
        }
        $habitacion->user()->associate(Auth::user());
        $habitacion->direccion = $dir;
        $habitacion->save();
        $habitacion->universidades()->sync($request->universidades);
        $imagen = new Imagen();
        $imagen->habitacion()->associate($habitacion);
        $imagen->name = $name;
        $imagen->save();
        
        Flash::success('Se ha agreagado existosamente');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
        $habitacion = Habitacion::find($id);
        $habitacion->user;
        $habitacion->ubicacion;
        $habitacion->imagenes;
        $habitacion->universidades;
        $direccion = str_replace(("_")," ",$habitacion->direccion);
        if ($habitacion->numero_votos > 0) {
            $valoracion = $habitacion->calificacion/$habitacion->numero_votos;
        }else{
            $valoracion = $habitacion->calificacion;
        }
        if ($habitacion->user->numero_votos > 0) {
            $valoracionUser = $habitacion->user->calificacion/$habitacion->user->numero_votos;
        }else{
            $valoracionUser = $habitacion->user->calificacion;
        }
        return view('users.habitaciones.show')->with('habitacion',$habitacion)->with('valoracion',$valoracion)->with('valUser',$valoracionUser)->with('direccion',$direccion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $habitacion = Habitacion::find($id);
        // dd($habitacion->user);
        if($habitacion->user == Auth::user()){
            $habitacion->ubicacion;
            $universidades = Universidad::orderBy('id','ASC')->pluck('nombre','id');
            $habitacion_universidades = $habitacion->universidades->pluck('id')->ToArray();
            return view('users.habitaciones.edit')->with('habitacion',$habitacion)->with('universidades',$universidades)->with('habitacion_universidades',$habitacion_universidades);
        }else{
            abort(401);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $dir = str_replace(" ", "_", $request->direccion);
        $dir = str_replace("#", "_", $dir);
        $habitacion = Habitacion::find($id);
        if($habitacion->user == Auth::user()){
            $habitacion->fill($request->all());
            $habitacion->direccion = $dir;
            $habitacion->save();
            $habitacion->universidades()->sync($request->universidades);
            Flash::success('Se actualizo correctamente');
            return redirect()->route('users.index');
        }else{
            abort(401);        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitacion = Habitacion::find($id);
        if($habitacion->user == Auth::user()){
            $habitacion->delete();
            Flash::error('La habitacion ha sido eliminado de forma exitosa');
            return redirect()->route('users.index');
        }else{
            abort(401);
        }
    }

    public function calificar($id,$valor){
        $habitacion = Habitacion::find($id);
        $caliInicial = $habitacion->calificacion;
        $votos = $habitacion->numero_votos;
        $habitacion->calificacion = $caliInicial + $valor;
        $habitacion->numero_votos = $votos + 1;
        $habitacion->save();
        Flash::success('Gracias por calificar');
        return redirect()->route('habitaciones.show',$id);
    }

    public function buscar(Request $request){
        $datos = array('ubicacion' => $request->ubicacion, 'universidad' => $request->universidad, 'precio' => $request->precio , 'genero' => $request->genero , 'tiempo' => $request->tiempo );
        // $habitaciones = Habitacion::buscar($datos);
        $habitaciones = [];
        $i = 0;
        if($datos['universidad'] != "" && $datos['genero'] != "" && $datos['precio'] != ""){
            $temp = Habitacion::where('precio','<=',$datos['precio'])->where('ubicacion_id','=',$datos['ubicacion'])->get();
            // dd($temp);
            foreach ($temp as $habitacion) {
                foreach ($habitacion->universidades as $universidad) {
                    if ($universidad->id == $datos['universidad'] && $habitacion->user->genero == $datos['genero']) {
                        $habitaciones[$i] = $habitacion;
                    }
                    $i++;
                }

            }
        }else if($datos['precio'] == "" && ($datos['genero'] != "" || $datos['universidad'] != "")){
            if($datos['universidad'] != "" && $datos['genero'] != ""){
                $temp = Habitacion::where('ubicacion_id','=',$datos['ubicacion'])->get();
                foreach ($temp as $habitacion) {
                    foreach ($habitacion->universidades as $universidad) {
                        if ($universidad->id == $datos['universidad'] && $habitacion->user->genero == $datos['genero']) {
                            $habitaciones[$i] = $habitacion;
                        }
                        $i++;
                    }

                }
            }else if($datos['universidad'] == "" && $datos['genero'] != ""){
                $temp = Habitacion::where('ubicacion_id','=',$datos['ubicacion'])->get();
                foreach ($temp as $habitacion) {
                    if ($habitacion->user->genero == $datos['genero']) {
                        $habitaciones[$i] = $habitacion;
                    }
                    $i++;
                }
            }else if($datos['genero'] == "" && $datos['universidad'] != ""){
                $temp = Habitacion::where('ubicacion_id','=',$datos['ubicacion'])->get();
                foreach ($temp as $habitacion) {
                    foreach ($habitacion->universidades as $universidad) {
                            if ($universidad->id == $datos['universidad']) {
                                $habitaciones[$i] = $habitacion;
                            }
                            $i++;
                    }
                }
            }
        }else if($datos['universidad'] == "" && ($datos['genero'] != "" || $datos['precio'] != "")){
            if($datos['genero'] != "" && $datos['precio'] == ""){
                $temp = Habitacion::where('precio','<=',$datos['precio'])->where('ubicacion_id','=',$datos['ubicacion'])->get();
                foreach ($temp as $habitacion) {
                    if ($habitacion->user->genero == $datos['genero']) {
                        $habitaciones[$i] = $habitacion;
                    }
                    $i++;
                }
            }else if($datos['genero'] == "" && $datos['precio'] != ""){
                $temp = Habitacion::where('precio','<=',$datos['precio'])->where('ubicacion_id','=',$datos['ubicacion'])->get();
                foreach ($temp as $habitacion) {
                    $habitaciones[$i] = $habitacion;
                    $i++;
                }
            }else if($datos['precio'] == "" && $datos['genero'] != ""){
                $temp = Habitacion::where('ubicacion_id','=',$datos['ubicacion'])->get();
                foreach ($temp as $habitacion) {
                    if ($habitacion->user->genero == $datos['genero']) {
                        $habitaciones[$i] = $habitacion;
                    }
                    $i++;
                }
            }
        }else if($datos['genero'] == "" && ($datos['precio'] != "" || $datos['universidad'] != "")){
            if($datos['universidad'] != "" && $datos['precio'] != ""){
                $temp = Habitacion::where('precio','<=',$datos['precio'])->where('ubicacion_id','=',$datos['ubicacion'])->get();
                foreach ($temp as $habitacion) {
                    foreach ($habitacion->universidades as $universidad) {
                        if ($universidad->id == $datos['universidad'] ) {
                            $habitaciones[$i] = $habitacion;
                        }
                        $i++;
                    }

                }
            }else if($datos['universidad'] == "" && $datos['precio'] != ""){
                $temp = Habitacion::where('precio','<=',$datos['precio'])->where('ubicacion_id','=',$datos['ubicacion'])->get();
                foreach ($temp as $habitacion) {
                    $habitaciones[$i] = $habitacion;
                    $i++;
                }
            }else if($datos['universidad'] != "" && $datos['precio'] == ""){
                $temp = Habitacion::where('ubicacion_id','=',$datos['ubicacion'])->get();
                foreach ($temp as $habitacion) {
                    foreach ($habitacion->universidades as $universidad) {
                        if ($universidad->id == $datos['universidad'] ) {
                            $habitaciones[$i] = $habitacion;
                        }
                        $i++;
                    }

                }
            }

        }else{
            $temp = Habitacion::where('ubicacion_id','=',$datos['ubicacion'])->get();
            foreach ($temp as $habitacion) {
                $habitaciones[$i] = $habitacion;
                $i++;
            }
        }
        if (count($habitaciones) == 0) {
            Flash::warning('No Existen Habitaciones Con Las Caracteristicas Deseadas');
        }
        return view('users.habitaciones.index')->with('habitaciones',collect($habitaciones));
    }
}
