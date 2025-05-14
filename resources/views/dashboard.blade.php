@extends('layouts.app')

@section('title', 'Inicio - Plataforma E-learning')

@section('content')
<div class="max-w-7xl mx-auto py-10 px-4">
    <h2 class="text-2xl font-bold text-center mb-4">Bienvenido/a a la Plataforma E-learning</h2>
    <p class="text-center text-gray-600 mb-10">
        Esta plataforma te permite acceder fácilmente a tus cursos, materiales, estadísticas y más. Diseñada para adaptarse a todo tipo de dispositivos.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Botón: Gestión de Cursos -->
        <a href="{{ route('admin.cursos.index') }}" class="block bg-blue-100 hover:bg-blue-200 p-6 rounded text-center">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Gestión de Cursos</h3>
            <p class="text-sm text-blue-700">Crea, edita y organiza los cursos desde un solo lugar.</p>
        </a>

        <!-- Botón: Gestión de Usuarios -->
        <a href="{{ route('admin.usuarios.index') }}" class="block bg-green-100 hover:bg-green-200 p-6 rounded text-center">
            <h3 class="text-lg font-semibold text-green-700 mb-2">Usuarios</h3>
            <p class="text-sm text-green-700">Administra a tus alumnos y profesores de forma sencilla.</p>
        </a>

        <!-- Botón: Materiales -->
        <a href="#" class="block bg-yellow-100 hover:bg-yellow-200 p-6 rounded text-center">
            <h3 class="text-lg font-semibold text-yellow-700 mb-2">Materiales</h3>
            <p class="text-sm text-yellow-700">Comparte contenidos de estudio adaptados a cada curso.</p>
        </a>

        <!-- Botón: Estadísticas -->
        <a href="#" class="block bg-purple-100 hover:bg-purple-200 p-6 rounded text-center">
            <h3 class="text-lg font-semibold text-purple-700 mb-2">Estadísticas</h3>
            <p class="text-sm text-purple-700">Consulta el rendimiento y progreso de tus usuarios.</p>
        </a>
    </div>
</div>
@endsection
