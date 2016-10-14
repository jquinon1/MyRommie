<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaHabitacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('habitaciones', function (Blueprint $table) {
        $table->increments('id');
        $table->string('direccion')->unique();
        //$table->string('arrendador');
        $table->integer('precio')->unsigned();
        $table->string('foto');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('habitaciones');
    }
}
