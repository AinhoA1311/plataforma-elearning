@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Crear nuevo usuario</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
            <ul class="list-disc pl-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.usuarios.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block font-medium text-sm">Nombre:</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium text-sm">Correo electrónico:</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium text-sm">Contraseña:</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium text-sm">Rol:</label>
            <select name="role" class="w-full border rounded px-3 py-2" required>
                <option value="admin">Admin</option>
                <option value="alumno">Alumno</option>
            </select>
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('admin.usuarios.index') }}" class="text-blue-600 hover:underline">← Volver al listado</a>
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                Crear usuario
            </button>
        </div>
    </form>
</div>
@endsection

