@extends('layouts.app')

@section('title', 'Gestión de Materiales')

@section('content')
<div class="container text-center">
    <h2 class="text-green text-3xl font-bold mb-4">Listado de Materiales</h2>
    <p class="text-green-300 mb-6">Aquí puedes administrar los recursos educativos de los cursos.</p>

    <a href="{{ route('admin.materiales.create') }}" class="btn mb-6 inline-block">
        + Subir nuevo material
    </a>

    <div class="overflow-x-auto">
        <table class="w-full min-w-[600px] text-sm border border-green-700 bg-[#1a1a1a] text-green-100 rounded">
            <thead>
                <tr class="bg-[#0d0d0d] text-green-400">
                    <th class="p-2 border-b border-green-700">ID</th>
                    <th class="p-2 border-b border-green-700">Título</th>
                    <th class="p-2 border-b border-green-700">Curso</th>
                    <th class="p-2 border-b border-green-700">Archivo</th>
                    <th class="p-2 border-b border-green-700 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($materiales as $material)
                    <tr class="hover:bg-[#262626] transition">
                        <td class="p-2 border-b border-green-700">{{ $material->id }}</td>
                        <td class="p-2 border-b border-green-700">{{ $material->titulo }}</td>
                        <td class="p-2 border-b border-green-700">{{ $material->curso->nombre ?? 'No asignado' }}</td>
                        <td class="p-2 border-b border-green-700">
                            @if($material->archivo)
                                <a href="{{ asset('storage/' . $material->archivo) }}" target="_blank" class="text-green-300 hover:underline">Ver</a>
                            @else
                                <span class="text-red-400">Sin archivo</span>
                            @endif
                        </td>
                        <td class="p-2 border-b border-green-700 text-center">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('admin.materiales.edit', $material->id) }}" class="bg-yellow-500 text-black px-3 py-1 rounded hover:bg-yellow-400 text-sm">Editar</a>
                                <form action="{{ route('admin.materiales.destroy', $material->id) }}" method="POST" onsubmit="return confirm('¿Eliminar este material?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-4 text-center text-red-400">No hay materiales cargados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        <a href="{{ route('admin') }}" class="btn">← Volver al panel</a>
    </div>
</div>
@endsection




