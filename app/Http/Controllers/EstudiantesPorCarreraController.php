<?php

namespace App\Http\Controllers;

use App\EstudiantesPorCarrera;
use Illuminate\Http\Request;

class EstudiantesPorCarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        EstudiantesPorCarrera::create([
            'carrera_id'=>$request->carrera_id,
        'estudiante_id'=>$data->id,
        'ingreso_estudiante'=>$request->ingreso_estudiante,
        'periodo_ingreso'=>$request->periodo_ingreso
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EstudiantesPorCarrera  $estudiantesPorCarrera
     * @return \Illuminate\Http\Response
     */
    public function show(EstudiantesPorCarrera $estudiantesPorCarrera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EstudiantesPorCarrera  $estudiantesPorCarrera
     * @return \Illuminate\Http\Response
     */
    public function edit(EstudiantesPorCarrera $estudiantesPorCarrera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstudiantesPorCarrera  $estudiantesPorCarrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstudiantesPorCarrera $estudiantesPorCarrera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstudiantesPorCarrera  $estudiantesPorCarrera
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstudiantesPorCarrera $estudiantesPorCarrera)
    {
        //
    }
}
