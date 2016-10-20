<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'nombre' => $faker->name,
        'apellido' => $faker->lastname,
        'email' => $faker->unique()->email,
        'password' => bcrypt('myrommie'),
        'tipo_id' => 'CC',
        'numId' =>	'123456789',
        'genero' => 'hombre',
        'tipo_usuario' => 'arrendador'
    ];
});

$factory->define(App\Ubicacion::class, function(Faker\Generator $faker){
	return [
		'pais'	=> $faker->country,
		'ciudad' => $faker->city
	];
});

$factory->define(App\Universidad::class, function(Faker\Generator $faker){
	return [
		'nombre' => $faker->unique()->name,
		'lema' => $faker->text(90),
		'escudo' => 'escudo',
		'pagina' => $faker->url,
		'direccion' => $faker->address,
		'ciudad' => $faker->numberBetween(1,20)
	];
});
