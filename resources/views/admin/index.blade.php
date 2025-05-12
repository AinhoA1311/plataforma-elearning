@extends('layouts.app')

@section('title', 'Panel de Administración')

@section('content')
    <div class="text-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Panel de Administración</h1>
        <p class="text-gray-700 mt-2">Bienvenido, Admin. Desde aquí puedes gestionar el sistema.</p>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <a href="{{ route('admin.usuarios.index') }}" class="block bg-blue-100 hover:bg-blue-200 p-4 rounded shadow text-center">
            <p class="text-sm text-gray-700">Usuarios</p>
        </a>
        <a href="{{ route('admin.cursos.index') }}" class="block bg-green-100 hover:bg-green-200 p-4 rounded shadow text-center">
            <p class="text-sm text-gray-700">Cursos</p>
        </a>
        <a href="#" class="block bg-yellow-100 hover:bg-yellow-200 p-4 rounded shadow text-center">
            <p class="text-sm text-gray-700">Materiales</p>
        </a>
        <a href="#" class="block bg-purple-100 hover:bg-purple-200 p-4 rounded shadow text-center">
            <p class="text-sm text-gray-700">Estadísticas</p>
        </a>
    </div>

    <div class="mt-6 text-center">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="mt-4 px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded transition">
                Cerrar sesión
            </button>
        </form>
    </div>
@endsection












