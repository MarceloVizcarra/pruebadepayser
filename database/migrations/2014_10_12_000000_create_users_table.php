<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');                 // nombre
            $table->string('surname');              // apellido
            $table->string('username')->unique();   // nombre de usuario
            $table->string('email')->unique();      // email
            $table->string('image');                // imagen de perfil
            $table->string('phone');                // telefono
            $table->string('description');          // descripcion
            $table->string('linkedin');             // linkedin    
            $table->string('github');               // github
            $table->string('country');              // pais
            $table->string('city');                 // ciudad
            $table->string('address');              // direccion
            $table->string('curriculum');           // curriculum
            $table->timestamp('email_verified_at')->nullable(); // verificacion de email
            $table->string('password');             // password
            $table->rememberToken();                // token de recordar
            $table->timestamps();                   // fecha de creacion y actualizacion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users', function(Blueprint $table){
            $table->dropColumn('status');
        });
    }
};
