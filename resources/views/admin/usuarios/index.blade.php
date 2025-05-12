@extends('layouts.app')

@section('title', 'Listado de Usuarios')

@section('content')
@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Listado de Usuarios</h1>

    <!-- Botón para crear nuevo usuario -->
    <div class="mb-4">
        <a href="{{ route('admin.usuarios.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm">
            + Añadir nuevo usuario
        </a>
    </div>

    <table class="min-w-full border rounded">
        <thead>
            <tr class="bg-gray-100 text-left text-sm">
                <th class="p-2 border">ID</th>
                <th class="p-2 border">Nombre</th>
                <th class="p-2 border">Email</th>
                <th class="p-2 border">Rol</th>
                <th class="p-2 border text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td class="p-2 border">{{ $usuario->id }}</td>
                <td class="p-2 border">{{ $usuario->name }}</td>
                <td class="p-2 border">{{ $usuario->email }}</td>
                <td class="p-2 border">{{ $usuario->role }}</td>
                <td class="p-2 border text-center flex justify-center gap-2">
                    <a href="{{ route('admin.usuarios.edit', $usuario->id) }}" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 text-sm">Editar</a>

                    <form action="{{ route('admin.usuarios.destroy', $usuario->id) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar este usuario?')">
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





