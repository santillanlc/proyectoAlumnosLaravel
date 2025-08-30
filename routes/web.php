<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::php('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/alumnos', [AlumnoController::class, 'getAlumnos']);
    Route::get('/', [AlumnoController::class, 'getAlumnos']);
    Route::get('/registrarAlumno', [AlumnoController::class, 'registrarAlumno']);
    Route::post('/guardarAlumno', [AlumnoController::class, 'guardarAlumno']);
    Route::get('/alumno/{id}', [AlumnoController::class, 'eliminarAlumno']);
    Route::get('/editarAlumno/{id}', [AlumnoController::class, 'editarAlumno']);
    Route::post('/actualizarAlumno/{id}', [AlumnoController::class, 'actualizarAlumno']);
});

require __DIR__.'/auth.php';
