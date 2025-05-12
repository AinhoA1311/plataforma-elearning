<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Muestra el listado de cursos.
     */
    public function index()
    {
        $cursos = Curso::all(); // recupera todos los cursos
        return view('admin.cursos.index', compact('cursos'));
    }

    /**
     * Muestra el formulario para crear un nuevo curso.
     */
    public function create()
    {
        return view('admin.cursos.create');
    }

    /**
     * Guarda un nuevo curso en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'nivel' => 'required|string'
        ]);

        Curso::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'nivel' => $request->nivel
        ]);

        return redirect()->route('admin.cursos.index')->with('success', 'Curso creado correctamente.');
    }

    /**
     * Muestra el formulario para editar un curso existente.
     */
    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('admin.cursos.edit', compact('curso'));
    }

    /**
     * Actualiza un curso en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'nivel' => 'required|string'
        ]);

        $curso = Curso::findOrFail($id);
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->nivel = $request->nivel;
        $curso->save();

        return redirect()->route('admin.cursos.index')->with('success', 'Curso actualizado correctamente.');
    }

    /**
     * Elimina un curso de la base de datos.
     */
    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return redirect()->route('admin.cursos.index')->with('success', 'Curso eliminado correctamente.');
    }
}

