<?php

use Illuminate\Database\Seeder;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Ubicacion::class,20)->create();
        $ciudades = array(
        	array('medellin', 'CO'),
        	array('envigado', 'CO'),
        	array('sabaneta', 'CO'),
        	array('bello', 'CO'),
        	array('itagüi', 'CO'),
        	array('la_estrella', 'CO'),
        	array('barbosa', 'CO'),
        	array('caldas', 'CO')
        );


        for ($i=0; $i < count($ciudades) ; $i++) { 
        	DB::table('ubicaciones')->insert([
        		'ciudad' => $ciudades[$i][0],
        		'pais' => $ciudades[$i][1]
        	]);
        }
    }
}
