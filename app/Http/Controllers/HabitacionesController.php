<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Http\Requests;

use App\Http\Requests\HabitacionRequest;

use Laracasts\Flash\Flash;

use App\Habitacion;

use App\Ubicacion;

// use App\User;

use App\Imagen;

class HabitacionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $id = Auth::user()->id;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $ubicacion = Ubicacion::orderBy('id','ASC')->pluck('ciudad','id'); 
        return view('users.habitaciones.create')->with('ciudades',$ubicacion);

        // $ubicacion = Ubicacion::all();

        // return view('habitaciones.create')->with('ciudades',$ubicacion);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HabitacionRequest $request)
    {
        if($request->file('imagen')){            
           

            $file = $request->file('imagen');
            $name = 'myrommie_'.time() . '.'.$file->getClientOriginalExtension();
            $path = public_path() . '/images/habitaciones';
            $file->move($path,$name);
            // dd($habitacion);           
        }
        $habitacion = new Habitacion($request->all());
        $habitacion->user_id = Auth::user()->id;
        // dd($habitacion);
        // $habitacion->user()->associate(Auth::user());
        $habitacion->save();


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
        //
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
        return view('users.habitaciones.edit')->with('habitacion',$habitacion);
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
}
