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
        $tipo_usuario = Auth::user()->tipo_usuario;
        switch ($tipo_usuario) {
            case 'arrendador':
                $habitaciones = Auth::user()->habitaciones()->paginate(6);
                return view('users.arrendador.index')->with('habitaciones',$habitaciones);
                break;
            case 'arrendatario':

                break;
            case 'admin':
                $users = User::orderBy('id','ASC');
                return view('users.admin.index');
                break;
            default:
                break;
        }
    }


    public function create(){
       
        // ->pluck('id','nombre');
        // ->pluck('nombre','id');
        // dd($caracteristicas);
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

    public function edit($id){
         $tipo_usuario = Auth::user()->tipo_usuario;
         switch ($tipo_usuario) {
             case 'arrendador':
                $user = Auth::user();
                return view('users.arrendador.edit')->with('user',$user);
                break;
            case 'arrendatario':

                break;
            case 'admin':
                $users = User::orderBy('id','ASC');
                return view('users.admin.index');
                break;
            default:
                break;
         }
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        $user->fill($request->all());
        Flash::info('Datos actualizados correctamente');
        return redirect()->route('users.index');
    }

    public function destroy($id){
        Auth::logout();
         $user = User::find($id);
        $user->delete();
        Flash::error('Usuario Eliminado');
        return redirect()->route('welcome');
    }
}
