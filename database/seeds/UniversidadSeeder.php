<?php

use Illuminate\Database\Seeder;

class UniversidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$universidades = array(array('EAFIT','Abierta al mundo','eafit.jpg','http://www.eafit.edu.co','Carrera 49 # 7 sur -50',1,'6.200299999999999','-75.57754599999998'),
    		array('CES','Un compromiso con la excelencia','ces.jpg','http://www.ces.edu.co','DIRECCION',1,'6.2084094','-75.5557789'),
    		array('UNAL','Busca la verdad en las aulas academicas','unal.jpg','http://www.medellin.unal.edu.co','DIRECCION',1,'6.259617555850852','-75.57885646820068'),
    		array('UDEA','Alma mater de la raza','udea.jpg','http://www.udea.edu.co','DIRECCION',1,'6.267352196455107', '-75.56699842214584')
    		,array('UDEM', 'ciencia y libertad', 'udem.jpg', 'http://www.udem.edu.co','DIRECCION',1, '6.231869491114237', '-75.60983598232269'),
    		array('UPB', 'formación integral para la transformación social y humana', 'upb.jpg', 'http://www.upb.edu.co/portal/page?_pageid=1054,1&_dad=portal&_schema=PORTAL','DIRECCION',1, '6.244481218168726', '-75.58940827846527'));
        // factory(App\Universidad::class,20)->create();


        for ($i=0; $i < count($universidades); $i++) { 
        	// for ($j=0; $j < count($universidades[$i]) ; $j++) { 
        		DB::table('universidades')->insert([
	        	'nombre' => $universidades[$i][0],
	        	'lema' => $universidades[$i][1],
	        	'escudo' => $universidades[$i][2],
	        	'pagina' => $universidades[$i][3],
	        	'direccion' => $universidades[$i][4],
	        	'ciudad_id' => $universidades[$i][5],
	        	'latitud' => $universidades[$i][6],
	        	'longitud' => $universidades[$i][7]	        	
	        ]);
        	// }
        }
    }
}
