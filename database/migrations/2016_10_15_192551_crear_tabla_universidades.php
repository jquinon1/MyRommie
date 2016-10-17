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
        $table->string('url',100);
        $table->string('direccion');
        $table->integer('ciudad')->unsigned();

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
        Schema::drop('universidades');
    }
}
