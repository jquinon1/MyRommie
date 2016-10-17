<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\User;

class UsersController extends Controller
{
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
