<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->bigIncrements('id');

            // ID del estudiante
            $table->unsignedBigInteger('estudiante_id');

            // Pais donde vive el estudiante
            $table->string('pais', 100);

            // Estado donde vive el estudiante
            $table->string('estado', 100);

            // Ciudad donde vive el estudiante
            $table->string('ciudad', 100);

            $table->timestamps();
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
}
