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
        $table->string('direccion')->nullable();
        $table->float('latitud', 25, 20)->nullable();
        $table->float('longitud', 25, 20)->nullable();
        $table->string('precio');
        $table->double('calificacion',2,1)->default(0.0);
        $table->integer('numero_votos')->default(0);
        //$table->enum('estado',['ocupado','desocupado'])->default('desocupado');
        $table->text('descripcion')->nullable();
        $table->integer('user_id')->unsigned();
        $table->integer('ubicacion_id')->unsigned();


        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');

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
        Schema::drop('habitaciones');
    }
}
