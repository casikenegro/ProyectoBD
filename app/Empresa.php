<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = "empresa";
    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'ubicacion',
    ];
    protected $hidden = ['created_at','updated_at'];
}
