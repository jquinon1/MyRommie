<?php

use Illuminate\Database\Seeder;

class Habitacion_UniversidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 30 ; $i++) { 
    		DB::table('habitacion_universidad')->insert([
	        	'habitacion_id' => rand (1,40),
	        	'universidad_id'	=> rand (1,20)
	        ]);
    	}
    }
}
