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
        $table->string('precio');
        $table->double('calificacion',3,2)->nullable();
        $table->enum('estado',['ocupado','desocupado'])->default('desocupado');
        $table->text('descripcion');
        $table->string('longitud')->nullable();
        $table->string('latitud')->nullable();
        $table->integer('user_id')->unsigned();
        $table->string('direccion');
        $table->integer('ciudad')->unsigned();


        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('ciudad')->references('id')->on('ubicaciones')->onDelete('cascade');

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
