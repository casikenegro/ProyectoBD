<?php

namespace App\Http\Controllers;

use App\Profesores;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Profesores.menu",["Profesore"=>"hola"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Profesores.register"); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function show(Profesores $profesores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesores $profesores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesores $profesores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesores $profesores)
    {
        //
    }
}
