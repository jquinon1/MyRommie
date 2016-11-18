<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		'nombre' => 'Jhonatan',
    		'apellido' => 'Avila',
    		'email' => 'jhonaqasistemas@gmail.com',
    		'password' => bcrypt('myrommie'),
    		'tipo_id' => 'CC',
    		'numId' =>	'1017240830',
    		'genero' => 'hombre',
    		'tipo_usuario' => 'admin',
    		'token' => str_random(30),
    		'activated' => true,
        'created_at' => Carbon::now(),
        'updated_at'  => Carbon::now()
    		]);
    	factory(App\User::class,80)->create();
    }
}
