<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Carrera as CarreraModel;

class Carrera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrera', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion',255);
            $table->timestamps();
        });
        CarreraModel::create([
            'nombre'=>'informatica',
            'descripcion'=> 'carrera donde las personas creen que reparan computdaros cuando entran'
        ]);
        CarreraModel::create([
            'nombre'=>'contaduria',
            'descripcion'=> 'aprenderas sobre manicura y sobre a usar excel'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrera');
    }
}
