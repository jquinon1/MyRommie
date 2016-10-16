<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function create(){
    	return view('auth.register');
    }

    public function store(Request $request){
    	$user = new User($request->all());
    	if ($request->repeat_password == $request->password) {
    		$user->password = bcrypt($request->password);
    		$user->save();
    	} else {
    		dd('DAHH');
    	}
    	
    }
}
