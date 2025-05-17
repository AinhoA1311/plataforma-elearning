<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Curso;

class MaterialController extends Controller
{
    public function index()
    {
        $materiales = Material::with('curso')->get(); // ✅ Trae materiales con curso
        return view('admin.materiales.index', compact('materiales'));
    }

    public function create()
    {
        $cursos = Curso::all();
        return view('admin.materiales.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'archivo' => 'nullable|string|max:255',
            'curso_id' => 'required|integer|exists:cursos,id',
        ]);

        Material::create($request->all());

        return redirect()->route('admin.materiales.index')->with('success', 'Material creado correctamente.');
    }

    public function show($id)
    {
        $material = Material::with('curso')->findOrFail($id);
        return view('admin.materiales.show', compact('material'));
    }

    public function edit($id)
    {
        $material = Material::findOrFail($id);
        $cursos = Curso::all();
        return view('admin.materiales.edit', compact('material', 'cursos'));
    }

    public function update(Request $request, $id)
    {
        $material = Material::findOrFail($id);

        $request->validate([
            'titulo' => 'required|string|max:255',
            'archivo' => 'nullable|string|max:255',
            'curso_id' => 'required|integer|exists:cursos,id',
        ]);

        $material->update($request->all());

        return redirect()->route('admin.materiales.index')->with('success', 'Material actualizado correctamente.');
    }

    public function destroy($id)
    {
        $material = Material::findOrFail($id);
        $material->delete();

        return redirect()->route('admin.materiales.index')->with('success', 'Material eliminado correctamente.');
    }
}



