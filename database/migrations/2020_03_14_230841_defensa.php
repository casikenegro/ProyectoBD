<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Defensa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defensa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tesis');
            $table->foreign('id_tesis')->references('id')->on('tesis');
            $table->foreignId('id_juez_n1');
            $table->foreign('id_juez_n1')->references('id')->on('profesor');
            $table->foreignId('id_juez_n2');
            $table->foreign('id_juez_n2')->references('id')->on('profesor');
            $table->string('aula'); 
            $table->dateTime('fecha_defensa');
            $table->string('periodo_universitario');
            $table->string('observaciones',255);
            $table->decimal('nota_juez_n1',8,2);
            $table->decimal('nota_juez_n2',8,2);
            $table->decimal('nota_tutor_industrial',8,2);
            $table->decimal('nota_tutor_academico',8,2);
            $table->decimal('nota_total',8,2);
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
        Schema::dropIfExists('defensa');
    }
}
