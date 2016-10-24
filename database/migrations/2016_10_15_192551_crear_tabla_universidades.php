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
        $table->text('lema');
        $table->string('escudo');
        $table->string('pagina');
        $table->string('direccion')->nullable();
        $table->integer('ciudad_id')->unsigned();
        $table->float('longitud',25,20)->nullable();
        $table->float('latitud', 25, 20)->nullable();

        $table->foreign('ciudad_id')->references('id')->on('ubicaciones')->onDelete('cascade');

        $table->timestamps();
      });

      Schema::create('habitacion_universidad',function(Blueprint $table){
            $table->increments('id');
            $table->integer('habitacion_id')->unsigned();
            $table->integer('universidad_id')->unsigned();

            $table->foreign('habitacion_id')->references('id')->on('habitaciones')->onDelete('cascade');
            $table->foreign('universidad_id')->references('id')->on('universidades')->onDelete('cascade');
            $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('habitacion_universidad');
        Schema::dropIfExists('universidades');
    }
}
