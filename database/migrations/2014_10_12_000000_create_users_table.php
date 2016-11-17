<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('numId');
            // Ya que puede ser cc, ce o cosas por el estilo
            $table->enum('tipo_id',['CC','CE']);
            $table->enum('genero',['hombre','mujer','lgbti']);
            $table->enum('tipo_usuario',['arrendador','arrendatario','admin']);
            $table->string('token')->index();
            $table->boolean('activated')->default(false);
            $table->double('calificacion',2,1)->default(0.0);
            $table->integer('numero_votos')->default(0);
            $table->rememberToken();
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
        
        Schema::drop('users');
    }
}
