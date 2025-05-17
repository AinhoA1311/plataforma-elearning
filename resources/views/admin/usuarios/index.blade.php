@extends('layouts.app')

@section('title', 'Gestión de Usuarios')

@section('content')
<h2 class="text-3xl font-bold text-green-400 mb-4">Listado de Usuarios</h2>
<p class="text-green-300 mb-6">Administra los alumnos, profesores y administradores.</p>

<a href="{{ route('admin.usuarios.create') }}" class="btn mb-6 inline-block">
    + Crear nuevo usuario
</a>

<div class="overflow-x-auto">
    <table class="w-full min-w-[600px] text-sm border border-green-700 bg-[#1a1a1a] text-green-100 rounded">
        <thead>
            <tr class="bg-[#0d0d0d] text-green-400">
                <th class="p-2 border-b border-green-700">ID</th>
                <th class="p-2 border-b border-green-700">Nombre</th>
                <th class="p-2 border-b border-green-700">Email</th>
                <th class="p-2 border-b border-green-700">Rol</th>
                <th class="p-2 border-b border-green-700 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr class="hover:bg-[#262626] transition">
                <td class="p-2 border-b border-green-700">{{ $usuario->id }}</td>
                <td class="p-2 border-b border-green-700">{{ $usuario->name }}</td>
                <td class="p-2 border-b border-green-700">{{ $usuario->email }}</td>
                <td class="p-2 border-b border-green-700">{{ $usuario->role }}</td>
                <td class="p-2 border-b border-green-700 text-center flex justify-center gap-2">
                    <a href="{{ route('admin.usuarios.edit', $usuario->id) }}" class="bg-yellow-500 text-black px-3 py-1 rounded hover:bg-yellow-400 text-sm">Editar</a>
                    <form action="{{ route('admin.usuarios.destroy', $usuario->id) }}" method="POST" onsubmit="return confirm('¿Eliminar este usuario?')">
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






