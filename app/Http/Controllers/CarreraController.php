<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['data'=>Carrera::all()],200);
        //return view("Carrera.menu",["carreras"=>Carrera::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view("Carrera.register"); 
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
          'data'=>Carrera::create($request->all())
        ],200);
       
      
      //return redirect('/carrera');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data  = Carrera::find($id);
        if(!$data){
            return response()->json(['message'=>'carrera no encontrada'],404);
        }
        return response()->json(['data'=>$data],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrera $carrera)
    {
       // return view("Carrera.edit",["carrera"=>$carrera]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $carrera  = Carrera::find($id);
        if(!$carrera)  return response()->json(['message'=>'carrera no encontrada'],404);
        $carrera->fill($request->all());
        $carrera->save();
        return response()->json(['data'=>Carrera::find($id)],200);
     //   return redirect('/carrera');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $carrera  = Carrera::find($id);
        if(!$carrera)  return response()->json(['message'=>'carrera no encontrada'],404);
        $carrera->delete();
    //    return redirect('/carrera'); 
    }
}
