<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\User;
use App\Habitacion;
use Auth;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['create','store']]);
    }



    public function index(){
        // $habitaciones = Habitacion::orderBy('id','ASC');
        $habitaciones = Auth::user()->habitaciones()->paginate(6);
        // $hab = Auth::user()->habitaciones;
        // $hab = Habitacion::all();
        // dd($habitaciones);
        // dd($habitaciones);
        // $user = User::find(Auth::user()->id);
        // $habitaciones = $user->habitaciones();
        return view('home')->with('habitaciones',$habitaciones);
    }


    public function create(){
    	return view('auth.register');
    }

    public function store(UserRequest $request){
    	$user = new User($request->all());
    	if ($request->repeat_password == $request->password) {
    		$user->password = bcrypt($request->password);
    		$user->save();
    	} else {
            Flash::warning("No se pudo registrar");
    		return reditec()->route('users.create');
    	}
    	Flash::success("Se ha registrado " . $user->name . " existosamente");
    	return view('welcome');
    }
}
