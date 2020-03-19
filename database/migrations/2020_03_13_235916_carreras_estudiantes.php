<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarrerasEstudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrera_id');
            $table->foreign('carrera_id')->references('id')->on('carrera');
            $table->foreignId('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiante');
            $table->date('ingreso_estudiante');
            $table->string('periodo_ingreso');
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
        Schema::dropIfExists('carreras_estudiantes');
    }
}
