<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\TutorIndustrial as TutorIndustrialModel;
class TutorIndustrial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_industrial', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('correo');
            $table->string('telefono');
            $table->foreignId('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresa');
            $table->timestamps();
        });
        TutorIndustrialModel::create([
            'nombre'=>'sancho',
            'apellido'=>'panza',
            'cedula'=>'9999',
            'correo'=>'aparece_en_corsel@el.zorro',
            'telefono'=>'455454',
            'empresa_id'=>1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_industrial');
    }
}
