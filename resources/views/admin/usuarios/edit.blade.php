@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Editar Usuario</h1>

    <form method="POST" action="{{ route('admin.usuarios.update', $usuario->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Nombre:</label>
            <input type="text" name="name" value="{{ $usuario->name }}" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Email:</label>
            <input type="email" name="email" value="{{ $usuario->email }}" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Rol:</label>
            <select name="role" class="w-full border rounded p-2" required>
                <option value="admin" {{ $usuario->role === 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="alumno" {{ $usuario->role === 'alumno' ? 'selected' : '' }}>Alumno</option>
                <option value="profesor" {{ $usuario->role === 'profesor' ? 'selected' : '' }}>Profesor</option>
            </select>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar Cambios</button>
        </div>
    </form>
</div>
@endsection
