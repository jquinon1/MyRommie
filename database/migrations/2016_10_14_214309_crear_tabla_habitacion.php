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
        $table->integer('precio')->unsigned();
        $table->double('calificacion',3,2);
        $table->enum('estado',['ocupado','desocupado']);
        $table->integer('user_id')->unsigned();
        $table->integer('direccion')->unsigned();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('direccion')->references('id')->on('ubicaciones')->onDelete('cascade');

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
