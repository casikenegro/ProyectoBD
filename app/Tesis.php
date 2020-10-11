<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tesis extends Model
{
    protected $table = "tesis";
    protected $fillable = [
        'titulo',
        'id_estudiante_carrera',
        'id_tutor_academico',
        'id_tutor_industrial',
        'estatus_tesis',
        'fecha_inicio',
        'fecha_finalizacion',
    ];
    protected $hidden = ['created_at','updated_at'];
}
