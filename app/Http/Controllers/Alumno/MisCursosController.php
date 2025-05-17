<?php

namespace App\Http\Controllers\Alumno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MisCursosController extends Controller
{
    public function index()
    {
        return view('alumno.cursos.index');
    }
}


