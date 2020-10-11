<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\EstudiantesPorCarrera;
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
        EstudiantesPorCarrera::create([
            'carrera_id'=>1,
            'estudiante_id'=>1,
            'ingreso_estudiante'=>'2019-11-11',
            'periodo_ingreso'=>'2019-B'
        ]);
        EstudiantesPorCarrera::create([
            'carrera_id'=>2,
            'estudiante_id'=>1,
            'ingreso_estudiante'=>'2019-11-11',
            'periodo_ingreso'=>'2019-B'
        ]);
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
