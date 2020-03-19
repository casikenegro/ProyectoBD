<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = "carrera";
    protected $fillable = [
       'nombre',
      'descripcion'
    ];
    protected $hidden = ['created_at','updated_at'];}
