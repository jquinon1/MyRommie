<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Universidad;
use App\Ubicacion;


class UniversidadesController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('errors.503');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $universidad = new Universidad($request->all());
        $ciudad = Ubicacion::find($request->ciudad);
        $universidad->ciudad()->associate($ciudad);
        // dd($ciudad);
        if($request->file('imagen')){
            $file = $request->file('imagen');
            $name = 'myrommie_universidad_'.time() . '.'.$file->getClientOriginalExtension();
            $path = public_path() . '/images/universidades';
            // $file->move($path,$name);
            // dd($habitacion);           
        }
        $universidad->escudo = $name;
        $universidad->save();
        Flash::success('Universidad '.$request->nombre.' agregada existosamente');
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
        return view('errors.503');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $universidad = Universidad::find($id);
        return view('users.admin.universidades.edit')->with('universidad',$universidad);
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
        $universidad = Universidad::find($id);
        $universidad->fill($request->all());
        $universidad->save();
        Flash::success($request->nombre." se actualizo correctamente");
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
        $universidad = Universidad::find($id);
        $universidad->delete();
        Flash::warning('Universidad eliminada existosamente');
        return redirect()->route('users.index');
    }
}
