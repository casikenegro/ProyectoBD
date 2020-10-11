<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Estudiantes;

class Estudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('correo');
            $table->string('telefono');
            $table->timestamps();
        });
        Estudiantes::create([
            'nombre'=>'juanito',
            'apellido'=>'alimaña',
            'correo'=>'sitiene_maña@esmalisia.viva',
            'telefono'=>'042499999',
            'cedula'=>'0000']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
}
