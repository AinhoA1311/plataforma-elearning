<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Curso;
use App\Models\Material;

class EstadisticaController extends Controller
{
    public function index()
    {
        $totalUsuarios = User::count();
        $totalCursos = Curso::count();
        $totalMateriales = Material::count();

        // Ejemplo: puedes mostrar la media de cursos por usuario
        $mediaCursosPorUsuario = $totalUsuarios > 0
            ? round($totalCursos / $totalUsuarios, 2)
            : 0;

        return view('admin.estadisticas.index', compact(
            'totalUsuarios',
            'totalCursos',
            'totalMateriales',
            'mediaCursosPorUsuario'
        ));
    }
}

