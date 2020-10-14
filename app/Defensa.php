<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defensa extends Model
{
    protected $table = "defensa";
    protected $fillable = [
        'id_tesis',
        'id_juez_n1',
        'id_juez_n2',
        'aula', 
        'fecha_defensa',
        'periodo_universitario',
        'observaciones',
        'nota_juez_n1',
        'nota_juez_n2',
        'nota_tutor_industrial',
        'nota_tutor_academico',
        'nota_total',
    ];
    protected $hidden = ['created_at','updated_at'];

    public function juez1(){
        return $this->belongsTo('App\Profesores', 'id_juez_n1', 'id');
    }
    public function juez2(){
        return $this->belongsTo('App\Profesores', 'id_juez_n2', 'id');
    }
    public function tesis(){
        return $this->belongsTo('App\Tesis', 'id_tesis', 'id');
    }
}
