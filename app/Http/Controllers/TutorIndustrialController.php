<?php

namespace App\Http\Controllers;

use App\TutorIndustrial;
use Illuminate\Http\Request;

class TutorIndustrialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['data'=>TutorIndustrial::all()],200);
      //  return view("TutorIndustrial.menu",["Profesore"=>"hola"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /// return view("TutorIndustrial.register"); 
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
            'data'=>TutorIndustrial::create($request->all())
          ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TutorIndustrial  $TutorIndustrial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data  = TutorIndustrial::find($id);
        if(!$data){
            return response()->json(['message'=>'TutorIndustrial no encontrado'],404);
        }
        return response()->json(['data'=>$data],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TutorIndustrial  $TutorIndustrial
     * @return \Illuminate\Http\Response
     */
    public function edit(TutorIndustrial $TutorIndustrial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TutorIndustrial  $TutorIndustrial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data  = TutorIndustrial::find($id);
        if(!$data)  return response()->json(['message'=>'TutorIndustrial no encontrada'],404);
        $data->fill($request->all());
        $data->save();
        return response()->json(['data'=>TutorIndustrial::find($id)],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TutorIndustrial  $Tesis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
