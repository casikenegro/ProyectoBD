<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
