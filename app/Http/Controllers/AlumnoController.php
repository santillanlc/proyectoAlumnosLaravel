<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function consulta(){
        $nombre = "slkmfjlksdmflksdmlkf";
        $edad = 99;
        $numero_control = "0234117823634";
        
        return view("ConsultaAlumnos", compact('nombre', 'edad', 'numero_control'));
    }

    public function calcular(){
        $calificaciones[0]= 8;
        $calificaciones[1]= 10;
        $calificaciones[2]= 7;
        $calificaciones[3]= 5.5;
        $calificaciones[4]= 6.8;

        $nombre = "Luis";

        return view('Boleta', compact('nombre', 'calificaciones'));
    }

    public function getAlumnos(){
        $alumnos = Alumno::orderBy('id', 'desc')->get();
        return view("ConsultarAlumnos", compact('alumnos'));
    }

    public function registrarAlumno(){
        return view('RegistrarAlumno');
    }
}
