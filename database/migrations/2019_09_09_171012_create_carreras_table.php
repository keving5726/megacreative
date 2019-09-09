<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->tinyIncrements('id');

            // Nombre de la carrera
            $table->string('nombre');

            // Descripcion detallada de la carrera
            $table->string('descripcion');

            // Disponibilidad de la carrera
            $table->unsignedTinyInteger('status_id');

            $table->timestamps();
            $table->unique('nombre');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carreras');
    }
}
