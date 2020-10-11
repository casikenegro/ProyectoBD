<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorIndustrial extends Model
{
    protected $table = "tutor_industrial";
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'correo',
        'telefono',
        'empresa_id',
    ];
    protected $hidden = ['created_at','updated_at'];
}
