<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUniversidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('universidades', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre')->unique();
        $table->string('lema',1023);
        $table->string('escudo');
        $table->string('pagina',1023);
        $table->double('latitud',25,20);
        $table->double('longitud',25,20);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('universidades');
    }
}
