<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Habitacion;
use App\Oferta;
use Laracasts\Flash\Flash;
use Auth;
class OfertasController extends Controller
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
    public function index($habitacion)
    {   
        // dd($habitacion);
        $ofertas = Oferta::ofertas($habitacion)->orderBy('created_at','ASC')->paginate(5);
        $room = Habitacion::find($habitacion);
        foreach ($ofertas as $oferta) {
            $oferta->user;
        }
        // dd($ofertas);
        return view('users.arrendadores.ofertas.index')->with('ofertas',$ofertas)->with('habitacion',$room);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // dd($request->all());
        $oferta = new Oferta($request->all());
        // dd($oferta);
        $habitacion = Habitacion::find($id);
        $oferta->habitacion()->associate($habitacion);
        $oferta->user()->associate(Auth::user());
        $oferta->save();
        Flash::success('Oferta registrada con exito');
        return redirect()->route('habitaciones.show',$id);
    }

}
