<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Imagen;
use App\Habitacion;
use Laracasts\Flash\Flash;

class ImagenesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('arrendador');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
       if($request->file('imagen')){            
           
            $file = $request->file('imagen');
            // dd($habitacion);
            $name = 'myrommie_'.time() . '.'.$file->getClientOriginalExtension();
            $path = public_path() . '/images/habitaciones';
            $file->move($path,$name);
            // // dd($habitacion);           
        }
        $habitacion = habitacion::find($id);
        $imagen = new Imagen();
        $imagen->habitacion()->associate($habitacion);
        // $imagen->habitacion_id = $habitacion->id;
        $imagen->name = $name;
        // dd($imagen);
        $imagen->save();
        
        Flash::success('Se ha agreagado existosamente');
        return redirect('habitaciones/'.$id);
    }


}
