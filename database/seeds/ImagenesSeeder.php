<?php

use Illuminate\Database\Seeder;

class ImagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagenes = array(
        	array('hab1', 1),
        	array('hab2', 2),
        	array('hab3', 3),
        	array('hab4', 4),
        	array('hab5', 5),
        	array('hab6', 6),
        	array('hab7', 7),
        	array('hab8', 8)
        );


        for ($i=0; $i < count($imagenes) ; $i++) { 
        	DB::table('imagenes')->insert([
        		'name' => $imagenes[$i][0],
        		'habitacion_id' => $imagenes[$i][1]
        	]);
        }
    }
}