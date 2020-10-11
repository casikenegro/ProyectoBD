<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Tesis as TesisModel;

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
            $table->enum('estatus_tesis',['APROBADA','RECHAZADA','SIN ENTREGAR','ENTREGADA']);
            $table->date('fecha_inicio');
            $table->date('fecha_finalizacion');
            $table->timestamps();
        });
        TesisModel::create([
            'titulo'=>'Programacion landa obsoleta',
            'id_estudiante_carrera'=>1,
            'id_tutor_academico'=>1,
            'id_tutor_industrial'=>1,
            'estatus_tesis'=>'SIN ENTREGAR',
            'fecha_inicio'=>'2020-01-01',
            'fecha_finalizacion'=>'2021-12-12',
        ]);
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
