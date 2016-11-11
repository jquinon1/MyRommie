<?php

use Illuminate\Database\Seeder;

class HabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Habitacion::class,40)->create();
        $habitaciones = array(
        	array('calle_4_sur_43b_10', '6.201089', '-75.57461639999997', '123456',1,1),
        	array('calle_7_sur_6_43c-8', '6.1991324', '-75.5762833', '234567',1,1),
        	array('calle-11c_sur_48b-10', '6.1956771', '-75.58022819999996', '345678',1,1),
        	array('calle_47_20b_52', '6.2366039', '-75.54831769999998', '456789',1,1),
        	array('carrera_32a-31_85', '6.2302314', '-75.56127620000001', '567890',1,1),
        	array('carrera_81_45d_52', '6.254662499999999', '-75.60027070000001', '678901',1,1),
        	array('carrera_35_16a-sur', '6.185860799999999', '-75.57165409999999', '789012',1,1),
        	array('carrera_39a_18b_sur_10', '6.1832287', '-75.57470430000001', '890123',1,1)
        );


        for ($i=0; $i < count($habitaciones) ; $i++) { 
        	DB::table('habitaciones')->insert([
        		'direccion' => $habitaciones[$i][0],
        		'latitud' => $habitaciones[$i][1],
        		'longitud' => $habitaciones[$i][2],
        		'precio' => $habitaciones[$i][3],
        		'user_id' => $habitaciones[$i][4],
        		'ubicacion_id' => $habitaciones[$i][5]
        	]);
        }
    }
}
