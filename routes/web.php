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

Route::get('/', [
	'uses' => 'ControladorFrontEnd@index',
	'as' => 'welcome'

	]);

Route::get('/map', 'ControladorFrontEnd@map');

Route::get('/contacto', 'ControladorFrontEnd@contacto');

Route::get('/acerca', 'ControladorFrontEnd@acerca');


Auth::routes();

Route::get('/home', 'UsersController@index');

Route::get('/habitacion', 'ControladorFrontEnd@habitacion');

Route::get('/habitacion/{id}', 'ControladorFrontEnd@habitacion2')->where(['id' => '[0-9]*']);

Route::get('/arrendador', 'ControladorFrontEnd@arrendador');

Route::get('/infoarrendador', 'ControladorFrontEnd@infoarrendador');

Route::get('/estudiante', 'ControladorFrontEnd@estudiante');



Route::get('/pm', 'ControladorFrontEnd@pm');

Route::get('/map/{dir}',[
	'uses'	=>	'ControladorFrontEnd@map2',
	'as'	=> 	'map.direccion'
]);


Route::resource('users', 'UsersController');
Route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy',
		'as' => 'users.destroy'
	]);

Route::group(['prefix => users'], function(){
	Route::resource('habitaciones','HabitacionesController');
	Route::get('habitaciones/{id}/destroy',[
		'uses'	=>	'HabitacionesController@destroy',
		'as'	=> 'users.habitaciones.destroy'
		]);
	Route::post('habitaciones/{id}/imagenes',[
		'uses' => 'ImagenesController@store',
		'as' =>	'imagenes.store'
	]);

	Route::get('habitaciones/{id}/calificar/{valor}',[
		'uses'	=> 'HabitacionesController@calificar',
		'as'	=> 'habitaciones.calificar'
	]);

	Route::get('habitaciones/{id}/users/calificar/{valor}',[
		'uses'	=> 'UsersController@calificar',
		'as'	=> 'users.calificar'
	]);
	Route::post('habitaciones/{id}/ofertas',[
		'uses'	=>	'OfertasController@store',
		'as'	=>	'ofertas.store'
	]);

	Route::resource('users/ubicaciones','UbicacionesController');
	Route::get('users/ubicaciones/{id}/destroy',[
		'uses'	=> 'UbicacionesController@destroy',
		'as'	=>	'users.ubicaciones.destroy'
	]);

	Route::resource('users/universidades','UniversidadesController');
	Route::get('users/universidades/{id}/destroy',[
		'uses'	=>	'UniversidadesController@destroy',
		'as'	=>	'users.universidades.destroy'
	]);

	Route::get('habitaciones/{id}/ofertas',[
		'uses'	=>	'OfertasController@index',
		'as'	=>	'ofertas.index'
	]);

	Route::get('ofertas/{oferta}/estado/{estado}',[
		'uses'	=> 'OfertasController@changeEstate',
		'as'	=>	'ofertas.state'
	]);

	Route::get('ofertas/{id}/edit',[ 
		'uses'	=>	'OfertasController@edit',
		'as'	=>	'users.ofertas.edit'
	]);
	Route::put('ofertas/{id}',[
		'uses'	=>	'OfertasController@update',
		'as'	=>	'users.ofertas.update'
	]);
	Route::get('ofertas/{id}/destroy',[
		'uses'	=> 'OfertasController@destroy',
		'as'	=> 'users.ofertas.destroy'
	]);
	
});
