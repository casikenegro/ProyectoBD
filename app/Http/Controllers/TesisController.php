<?php

namespace App\Http\Controllers;

use App\Tesis;
use Illuminate\Http\Request;

class TesisController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['data'=>Tesis::all()],200);
      //  return view("Tesis.menu",["Profesore"=>"hola"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /// return view("Tesis.register"); 
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
            'data'=>Tesis::create($request->all())
          ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tesis  $Tesis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data  = Tesis::find($id);
        if(!$data){
            return response()->json(['message'=>'Tesis no encontrado'],404);
        }
        return response()->json(['data'=>$data],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tesis  $Tesis
     * @return \Illuminate\Http\Response
     */
    public function edit(Tesis $Tesis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tesis  $Tesis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data  = Tesis::find($id);
        if(!$data)  return response()->json(['message'=>'Tesis no encontrada'],404);
        $data->fill($request->all());
        $data->save();
        return response()->json(['data'=>Tesis::find($id)],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tesis  $Tesis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
