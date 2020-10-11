<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Profesores; 

class Profesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('correo');
            $table->string('telefono');
            $table->timestamps();
        });
        Profesores::create([
            'nombre'=>'hector',
            'apellido'=>'lavoe',
            'cedula'=>'23',
            'correo'=>'prontollegara@eldia.demisuerte',
            'telefono'=>'08888',
        ]);
        Profesores::create([
            'nombre'=>'pedro',
            'apellido'=>'navaja',
            'cedula'=>'323232',
            'correo'=>'puñal_enmano@cruza.lacalle',
            'telefono'=>'546546542',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesor');
    }
}
