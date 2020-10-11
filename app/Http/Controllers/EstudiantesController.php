<?php

namespace App\Http\Controllers;

use App\Estudiantes;
use Illuminate\Http\Request;
use App\Carrera;
use App\EstudiantesPorCarrera;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['data'=>Estudiantes::all()]);
        //return view("Estudiantes.menu",["estudiantes"=>Estudiantes::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view("Estudiantes.register",["carreras"=>Carrera::all()]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Estudiantes::create($request->all());
        EstudiantesPorCarrera::create([
            'carrera_id'=>$request->carrera_id,
        'estudiante_id'=>$data->id,
        'ingreso_estudiante'=>$request->ingreso_estudiante,
        'periodo_ingreso'=>$request->periodo_ingreso
        ]);
        $data->carreras = $data->carreras()->get();
        $data->carreras->map(function($item){
            $item->nombreCarrera = $item->carrera()->first()->nombre;
            return $item;
        });
        return resonse()->json(['data'=>$data],200);
      //  return view("Estudiantes.menu",["estudiantes"=>Estudiantes::all()]);
      
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $data  = Estudiantes::find($id);
        if(!$data){
            return response()->json(['message'=>'estudiante no encontrado'],404);
        }
        $data->carreras = $data->carreras()->get();
        $data->carreras->map(function($item){
          $item->nombreCarrera = $item->carrera()->first()->nombre;
          return $item;
        });
        return response()->json(['data'=>$data],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiantes $estudiantes)
    {
    //    return view("Estudiantes.edit",["estudiante"=>$estudiantes]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data  = Estudiantes::find($id);
        if(!$data){
            return response()->json(['message'=>'estudiante no encontrado'],404);
        }
        $data->fill($request->all());
        $data->save();
        $data->carreras = $data->carreras()->get();
        $data->map(function($item){
            $item->nombreCarrera = $item->carrera()->first()->nombre;
            return $item;
        });
        return response()->json(['data'=>$data],200);        
        //return redirect('/estudiante');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $data  = Estudiantes::find($id);
        $data->delete();
        return response()->json(['meesage'=>"elimanado"],200);
      //  return redirect('/estudiante'); 
    }
}
