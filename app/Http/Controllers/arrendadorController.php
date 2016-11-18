<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\arrendador;




class arrendadorController extends Controller
{
    public function index()
    {
        return view('arrenador');

    }
}
