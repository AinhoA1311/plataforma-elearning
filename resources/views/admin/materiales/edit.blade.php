@extends('layouts.app')

@section('title', 'Editar material')

@section('content')
<div class="container text-center">
    <h2 class="text-green text-3xl font-bold mb-4">✏️ Editar material</h2>

    <p class="text-green-300 mb-6">Modifica los datos del material seleccionado.</p>

    @if ($errors->any())
        <div class="bg-red-800 text-white rounded p-4 mb-4">
            <strong>Errores encontrados:</strong>
            <ul class="mt-2 text-sm text-left list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.materiales.update', $material->id) }}" method="POST" class="max-w-xl mx-auto text-left bg-[#1a1a1a] p-6 rounded shadow-lg">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="titulo" class="block text-green-400 font-bold">Título</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $material->titulo) }}" class="w-full p-2 rounded bg-[#0d0d0d] text-white border border-green-600" required>
        </div>

        <div class="mb-4">
            <label for="curso_id" class="block text-green-400 font-bold">Curso</label>
            <select name="curso_id" id="curso_id" class="w-full p-2 rounded bg-[#0d0d0d] text-white border border-green-600" required>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ $material->curso_id == $curso->id ? 'selected' : '' }}>
                        {{ $curso->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="archivo" class="block text-green-400 font-bold">Archivo (URL o nombre de archivo)</label>
            <input type="text" name="archivo" id="archivo" value="{{ old('archivo', $material->archivo) }}" class="w-full p-2 rounded bg-[#0d0d0d] text-white border border-green-600">
        </div>

        <div class="text-center">
            <button type="submit" class="btn">💾 Actualizar material</button>
        </div>
    </form>

    <div class="mt-6">
        <a href="{{ route('admin.materiales.index') }}" class="btn">← Volver al listado</a>
    </div>
</div>
@endsection
