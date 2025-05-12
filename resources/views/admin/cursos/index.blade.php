@extends('layouts.app')

@section('title', 'Listado de Cursos')

@section('content')
@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Listado de Cursos</h1>

    <a href="{{ route('admin.cursos.create') }}" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 text-sm mb-4 inline-block">
        + Añadir nuevo curso
    </a>

    <table class="min-w-full border rounded">
        <thead>
            <tr class="bg-gray-100 text-left text-sm">
                <th class="p-2 border">ID</th>
                <th class="p-2 border">Nombre</th>
                <th class="p-2 border">Descripción</th>
                <th class="p-2 border">Nivel</th>
                <th class="p-2 border text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <td class="p-2 border">{{ $curso->id }}</td>
                <td class="p-2 border">{{ $curso->nombre }}</td>
                <td class="p-2 border">{{ $curso->descripcion }}</td>
                <td class="p-2 border">{{ $curso->nivel }}</td>
                <td class="p-2 border text-center flex justify-center gap-2">
                    <a href="{{ route('admin.cursos.edit', $curso->id) }}" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 text-sm">Editar</a>
                    <form action="{{ route('admin.cursos.destroy', $curso->id) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar este curso?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        <a href="{{ route('admin') }}" class="text-blue-600 hover:underline text-sm">← Volver al panel</a>
    </div>
</div>
@endsection
