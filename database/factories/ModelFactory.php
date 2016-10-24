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
        'tipo_id' => $faker->randomElement($array = array('CC','CE')),
        'numId' =>	$faker->creditCardNumber,
        'genero' => $faker->randomElement($array = array ('hombre','mujer','lgbti')),
        'tipo_usuario' => $faker->randomElement($array = array ('arrendador','arrendatario','admin'))
    ];
});

$factory->define(App\Ubicacion::class, function(Faker\Generator $faker){
	return [
		'pais'	=> $faker->country,
		'ciudad' => $faker->unique()->city
	];
});

$factory->define(App\Universidad::class, function(Faker\Generator $faker){
	return [
		'nombre' => $faker->unique()->company,
		'lema' => $faker->text(90),
		'escudo' => 'escudo',
		'pagina' => $faker->url,
		'direccion' => $faker->address,
		'ciudad_id' => $faker->numberBetween(1,20)
	];
});

$factory->define(App\Habitacion::class, function(Faker\Generator $faker){
	return [
		'precio' => $faker->numberBetween(),
		'estado' => $faker->randomElement($array = array('ocupado','desocupado')),
		'descripcion' => $faker->text(90),
		'direccion' => $faker->address,
		'user_id' => $faker->numberBetween(1,80),
		'ubicacion_id' => $faker->numberBetween(1,20)
	];
});




