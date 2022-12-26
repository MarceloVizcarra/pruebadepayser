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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // usuario que crea la oferta
            $table->string('title');        // titulo de la oferta
            $table->string('slug');
            $table->text('content');        // descripcion de la oferta
            $table->string('company');      // nombre de la empresa
            $table->string('image');        // logo de la empresa
            $table->string('location');     // ciudad, pais
            $table->string('type');         // tiempo completo, medio tiempo, contrato
            $table->string('salary');       // salario
            $table->string('category');     // categoria de la oferta (desarrollo, diseño, marketing, etc)
            $table->string('status');       // activo, inactivo
            $table->string('deadline');     // plazo de postulacion
            $table->boolean('published')->default(false); // publicado
            $table->timestamps();           // fecha de creacion y actualizacion

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
};
