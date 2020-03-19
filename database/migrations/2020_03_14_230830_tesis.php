<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tesis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tesis', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->foreignId('id_estudiante_carrera');
            $table->foreign('id_estudiante_carrera')->references('id')->on('carreras_estudiantes');
            $table->foreignId('id_tutor_academico');
            $table->foreign('id_tutor_academico')->references('id')->on('profesor');
            $table->foreignId('id_tutor_industrial');
            $table->foreign('id_tutor_industrial')->references('id')->on('tutor_industrial');
            $table->foreignId('id_estatus_tesis');
            $table->foreign('id_estatus_tesis')->references('id')->on('estatus_tesis');
            $table->date('fecha_inicio');
            $table->date('fecha_finalizacion');
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
        Schema::dropIfExists('tesis');
    }
}
