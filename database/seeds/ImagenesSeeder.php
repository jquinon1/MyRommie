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
        	array('hab1.jpg', 1),
        	array('hab2.jpg', 2),
        	array('hab3.jpg', 3),
        	array('hab4.jpg', 4),
        	array('hab5.jpg', 5),
        	array('hab6.jpg', 6),
        	array('hab7.jpg', 7),
        	array('hab8.jpg', 8)
        );


        for ($i=0; $i < count($imagenes) ; $i++) { 
        	DB::table('imagenes')->insert([
        		'name' => $imagenes[$i][0],
        		'habitacion_id' => $imagenes[$i][1]
        	]);
        }
    }
}