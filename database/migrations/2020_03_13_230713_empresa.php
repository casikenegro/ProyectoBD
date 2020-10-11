<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Empresa as EmpresaModel;

class Empresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('correo');
            $table->string('telefono');
            $table->string('ubicacion',255);
            $table->timestamps();
        });
        EmpresaModel::create([
            'nombre'=>'ibis',
            'correo'=>'ibis@ibis.com',
            'telefono'=>'15154',
            'ubicacion'=>'asdasda'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
