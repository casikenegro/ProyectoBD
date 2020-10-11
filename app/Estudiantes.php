<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EstudiantesPorCarrera;

class Estudiantes extends Model
{
    protected $table = "estudiante";
    protected $fillable = [
       'nombre',
       'apellido',
       'cedula',
       'correo',
       'telefono'
    ];
    protected $hidden = ['created_at','updated_at'];
    
    public function carreras(){
        return $this->hasMany('App\EstudiantesPorCarrera', 'estudiante_id', 'id');
    }
}
