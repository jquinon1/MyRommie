<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'ControladorFrontEnd@index');

Route::get('/map', 'ControladorFrontEnd@map');

Route::get('/map/{dir}', 'ControladorFrontEnd@map2');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/habitacion', 'ControladorFrontEnd@habitacion');

Route::get('/habitacion/{id}', 'ControladorFrontEnd@habitacion2')->where(['id' => '[0-9]*']);

Route::get('/arrendador', 'ControladorFrontEnd@arrendador');

Route::get('/infoarrendador', 'ControladorFrontEnd@infoarrendador');

Route::get('/estudiante', 'ControladorFrontEnd@estudiante');

Route::get('/pm', 'ControladorFrontEnd@pm');

Route::resource('users', 'UsersController');

Route::group(['prefix => users','middleware'=>'auth'], function(){
	Route::resource('habitaciones','HabitacionesController');
	
});