<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCaracteristicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->timestamps();
        });

      //   Schema::create('caracteristica_user',function(Blueprint $table){
      //       $table->increments('id');
      //       $table->integer('user_id')->unsigned();
      //       $table->integer('caracteristica_id')->unsigned();

      //       $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      //       $table->foreign('caracteristica_id')->references('id')->on('caracteristicas')->onDelete('cascade');
      //       $table->timestamps();
      // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('caracteristica_user');
        Schema::dropIfExists('caracteristicas');
    }
}
