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

    public function tutorAcademico(){
        return $this->belongsTo('App\Profesores', 'id_tutor_academico', 'id');
    }
    public function industrial(){
        return $this->belongsTo('App\TutorIndustrial', 'id_tutor_industrial', 'id');
    }
    public function estudianteCarrera(){
        return $this->belongsTo('App\EstudiantesPorCarrera', 'id_estudiante_carrera', 'id');
    }

    public function estudiante(){
        $estudianteCarrera = $this->estudianteCarrera()->first();
        return $estudianteCarrera->estudiante()->first();
    }
    
}
