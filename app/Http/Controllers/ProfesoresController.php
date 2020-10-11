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
        return response()->json(['data'=>Profesores::all()],200);
      //  return view("Profesores.menu",["Profesore"=>"hola"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /// return view("Profesores.register"); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            'data'=>Profesores::create($request->all())
          ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data  = Profesores::find($id);
        if(!$data){
            return response()->json(['message'=>'Profesor no encontrado'],404);
        }
        return response()->json(['data'=>$data],200);
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
    public function update(Request $request,$id)
    {
        $data  = Profesores::find($id);
        if(!$data)  return response()->json(['message'=>'Profesores no encontrada'],404);
        $data->fill($request->all());
        $data->save();
        return response()->json(['data'=>Profesores::find($id)],200);
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
