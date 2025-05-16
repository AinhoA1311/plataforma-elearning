<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Curso;

class EstadisticaController extends Controller
{
    public function index()
    {
        $totalUsuarios = User::count();
        $totalCursos = Curso::count();

        return view('admin.estadisticas.index', compact('totalUsuarios', 'totalCursos'));
    }
}
