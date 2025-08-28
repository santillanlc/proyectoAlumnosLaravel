<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Rutas del proyecto
Route::get('/consulta', [AlumnoController::class, 'consulta']);
Route::get('/calcularCalificacion', [AlumnoController::class, 'calcular']);

//Rutas de CRUD Alumno
Route::get('/alumnos', [AlumnoController::class, 'getAlumnos']);
Route::get('/registrarAlumno', [AlumnoController::class, 'registrarAlumno']);


