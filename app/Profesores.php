<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    protected $table = "profesor";
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'correo',
        'telefono',
    ];
    protected $hidden = ['created_at','updated_at'];
}
