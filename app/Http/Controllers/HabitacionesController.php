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

class HabitacionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show','index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            $habitaciones = Habitacion::search($request->universidad)->orderBy('habitacion_universidad.created_at','DES')->paginate(12);
        //Se reorganizan parametro que por alguna razon desconocida cambian en la consulta
            foreach ($habitaciones as $habitacion) {
                $habitacion->id = $habitacion->habitacion_id;
                $temp = Habitacion::find($habitacion->id);
                $habitacion->direccion = $temp->direccion;
            }
        // foreach ($habitaciones as $habitacion ) {
        //     $habitacion->universidades;
        // }
        // dd($habitaciones);
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
        $habitacion = new Habitacion($request->all());
        $ciudad = Ubicacion::find($request->ubicacion);
        // dd($ciudad);
        $habitacion->ubicacion()->associate($ciudad);
        // dd($habitacion);
        if($request->file('imagen')){            
           

            $file = $request->file('imagen');
            $name = 'myrommie_'.time() . '.'.$file->getClientOriginalExtension();
            $path = public_path() . '/images/habitaciones';
            $file->move($path,$name);
            // dd($habitacion);           
        }
        // $habitacion->user_id = Auth::user()->id;
        // dd($habitacion);
        $habitacion->user()->associate(Auth::user());
        $habitacion->save();
        $habitacion->universidades()->sync($request->universidades);
        // dd($habitacion);


        $imagen = new Imagen();
        $imagen->habitacion()->associate($habitacion);
        // $imagen->habitacion_id = $habitacion->id;
        $imagen->name = $name;
        // dd($imagen);
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

        // dd($valoracion)
        // dd($habitacion);
        // dd($habitacion->user->id);    
        return view('users.habitaciones.show')->with('habitacion',$habitacion)->with('valoracion',$valoracion)->with('valUser',$valoracionUser);
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
        $habitacion->ubicacion;
        $universidades = Universidad::orderBy('id','ASC')->pluck('nombre','id');
        $habitacion_universidades = $habitacion->universidades->pluck('id')->ToArray();
        return view('users.habitaciones.edit')->with('habitacion',$habitacion)->with('universidades',$universidades)->with('habitacion_universidades',$habitacion_universidades);
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
        $habitacion = Habitacion::find($id);
        $habitacion->fill($request->all());
        $habitacion->save();
        $habitacion->universidades()->sync($request->universidades);
        Flash::success('Se actualizo correctamente');
        return redirect()->route('users.index');
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

        $habitacion->delete();
        Flash::error('La habitacion ha sido eliminado de forma exitosa');
        return redirect()->route('users.index');
    }

    public function calificar($id,$valor){
        // dd($id." ".$valor);
        $habitacion = Habitacion::find($id);
        $caliInicial = $habitacion->calificacion;
        // dd($caliInicial);
        $votos = $habitacion->numero_votos;
        // dd($votos);
        $habitacion->calificacion = $caliInicial + $valor;
        $habitacion->numero_votos = $votos + 1;
        $habitacion->save();
        Flash::success('Gracias por calificar');
        return redirect()->route('habitaciones.show',$id);
    }
}
