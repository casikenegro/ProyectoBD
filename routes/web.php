<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/estudiante","EstudiantesController");
Route::resource("/carrera","CarreraController");
Route::resource("/tesis","TesisController");
Route::resource("/profesor","ProfesoresController");
Route::resource("/tutorIndustrial","TutorIndustrialController");
Route::resource("/defensa","DefensaController");
Route::resource("/empresa","EmpresaController");

