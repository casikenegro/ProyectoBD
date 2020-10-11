<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('carreras','CarreraController');
Route::apiResource('estudiantes','EstudiantesController');
Route::apiResource('empresas','EmpresaController');
Route::apiResource('profesores','ProfesoresController');
Route::apiResource('tesis','TesisController');
Route::apiResource('tutores-industriales','TutorIndustrialController');



