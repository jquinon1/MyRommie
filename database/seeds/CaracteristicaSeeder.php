<?php

use Illuminate\Database\Seeder;

class CaracteristicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $caracteristicas = array(array('fuma'),array('bebe'),array('mascotas'),array('rumbea'));


        for ($i=0; $i < count($caracteristicas); $i++) { 
        		DB::table('caracteristicas')->insert([
	        	'nombre' => $caracteristicas[$i][0]        	
	        ]);
        }
    }
}
