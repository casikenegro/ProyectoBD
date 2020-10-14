<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudiantesPorCarrera extends Model
{
    protected $table = "carreras_estudiantes";
    protected $fillable = [
        'carrera_id',
        'estudiante_id',
        'ingreso_estudiante',
        'periodo_ingreso'
    ];
    protected $hidden = ['created_at','updated_at'];
    public function carrera(){
        return $this->belongsTo('App\Carrera', 'carrera_id', 'id');
    }
    public function estudiante(){
        return $this->belongsTo('App\Estudiantes', 'estudiante_id', 'id');
    }
}
