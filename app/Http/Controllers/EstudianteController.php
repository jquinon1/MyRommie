<?php

namespace App\Http\Controllers;

use App\Habitacion;
use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Http\Requests\EstudianteRequest;
use App\User;


class EstudianteController extends Controller
{
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
