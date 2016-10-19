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
        $table->string('pagina',100);
        $table->string('direccion');
        $table->integer('ciudad')->unsigned();

        $table->foreign('ciudad')->references('id')->on('ubicaciones')->onDelete('cascade');

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
        Schema::drop('universidades');
    }
}
