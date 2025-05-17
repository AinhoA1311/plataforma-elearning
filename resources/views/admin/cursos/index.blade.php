@extends('layouts.app')

@section('title', 'Gestión de Cursos')

@section('content')
@if (session('success'))
    <div class="bg-green-900 border border-green-500 text-green-300 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<h2 class="text-3xl font-bold text-green-400 mb-4">Listado de Cursos</h2>
<p class="text-green-300 mb-6">Desde aquí puedes gestionar los cursos activos en la plataforma.</p>

<a href="{{ route('admin.cursos.create') }}" class="btn mb-6 inline-block">
    + Añadir nuevo curso
</a>

<div class="overflow-x-auto">
    <table class="w-full min-w-[600px] text-left text-sm border border-green-700 bg-[#1a1a1a] text-green-100 rounded">
        <thead>
            <tr class="bg-[#0d0d0d] text-green-400">
                <th class="p-2 border-b border-green-700">ID</th>
                <th class="p-2 border-b border-green-700">Nombre</th>
                <th class="p-2 border-b border-green-700">Descripción</th>
                <th class="p-2 border-b border-green-700">Nivel</th>
                <th class="p-2 border-b border-green-700 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr class="hover:bg-[#262626] transition">
                <td class="p-2 border-b border-green-700">{{ $curso->id }}</td>
                <td class="p-2 border-b border-green-700">{{ $curso->nombre }}</td>
                <td class="p-2 border-b border-green-700">{{ $curso->descripcion }}</td>
                <td class="p-2 border-b border-green-700">{{ $curso->nivel }}</td>
                <td class="p-2 border-b border-green-700 text-center flex justify-center gap-2">
                    <a href="{{ route('admin.cursos.edit', $curso->id) }}" class="bg-yellow-500 text-black px-3 py-1 rounded hover:bg-yellow-400 text-sm">Editar</a>
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
</div>

<div class="mt-6 text-center">
    <a href="{{ route('admin') }}" class="btn">← Volver al panel</a>
</div>
@endsection

