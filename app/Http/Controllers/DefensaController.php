<?php

namespace App\Http\Controllers;

use App\Defensa;
use Illuminate\Http\Request;

class DefensaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Defensa::all();
        $data->map(function($item){
            $item->juez1 = $item->juez1()->first();
            $item->juez2 = $item->juez2()->first();
            $item->tesis = $item->tesis()->first();
            return $item;
        });
        return response()->json(['data'=>$data],200);
      //  return view("Defensa.menu",["Profesore"=>"hola"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /// return view("Defensa.register"); 
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
            'data'=>Defensa::create($request->all())
          ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Defensa  $Defensa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $data = Defensa::find($id);
        if(!$data){
            return response()->json(['message'=>'Defensa no encontrada'],404);
        }
        $data->juez1 = $data->juez1()->first();
        $data->juez2 = $data->juez2()->first();
        $data->tesis = $data->tesis()->first();
        return response()->json(['data'=>$data],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Defensa  $Defensa
     * @return \Illuminate\Http\Response
     */
    public function edit(Defensa $Defensa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Defensa  $Defensa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data  = Defensa::find($id);
        if(!$data)  return response()->json(['message'=>'Defensa no encontrada'],404);
        $data->fill($request->all());
        $data->save();
        return response()->json(['data'=>Defensa::find($id)],200);
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
