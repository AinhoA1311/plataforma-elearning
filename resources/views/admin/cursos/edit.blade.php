@extends('layouts.app')

@section('title', 'Editar Curso')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Editar curso</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nombre" class="block font-semibold mb-1">Nombre del curso:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $curso->nombre }}" class="w-full border px-3 py-2 rounded">
        </div>

        <div class="mb-4">
            <label for="descripcion" class="block font-semibold mb-1">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="w-full border px-3 py-2 rounded">{{ $curso->descripcion }}</textarea>
        </div>

        <div class="mb-4">
            <label for="nivel" class="block font-semibold mb-1">Nivel:</label>
            <input type="text" name="nivel" id="nivel" value="{{ $curso->nivel }}" class="w-full border px-3 py-2 rounded">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Actualizar</button>
    </form>
</div>
@endsection




