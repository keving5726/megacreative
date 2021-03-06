<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');

            // Nombres del estudiante
            $table->string('nombres', 100);

            // Apellidos del estudiante
            $table->string('apellidos', 100);

            // Sexo del estudiante
            $table->unsignedTinyInteger('sexo_id');

            // Fecha de nacimiento del estudiante
            $table->date('fecha_de_nacimiento');

            // Correo electronico del estudiante
            $table->string('email', 100);

            // Carrera que cursa del estudiante
            $table->unsignedTinyInteger('carrera_id');

            // Disponibilidad del estudiante
            $table->unsignedTinyInteger('status_id');

            // Pais donde vive el estudiante
            $table->unsignedTinyInteger('pais_id');

            // Estado donde vive el estudiante
            $table->unsignedTinyInteger('estado_id');

            // Ciudad donde vive el estudiante
            $table->unsignedTinyInteger('ciudad_id');

            $table->timestamps();
            $table->unique('email');
            $table->foreign('sexo_id')->references('id')->on('sexos');
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
