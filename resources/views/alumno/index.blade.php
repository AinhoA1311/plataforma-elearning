@extends('layouts.app')

@section('title', 'Panel del Alumno')

@section('content')
    <div class="text-center">
        <h2 class="text-xl font-semibold mb-4">Panel del Alumno</h2>
        <p class="mb-6">Bienvenido, {{ Auth::user()->name }}. Aquí tienes acceso a tu entorno de aprendizaje:</p>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <a href="/alumno/cursos" class="bg-blue-100 border border-blue-300 p-4 rounded-lg shadow hover:bg-blue-200">
            <span class="text-lg font-medium">📘 Mis Cursos</span>
        </a>
        <a href="/alumno/materiales" class="bg-yellow-100 border border-yellow-300 p-4 rounded-lg shadow hover:bg-yellow-200">
            <span class="text-lg font-medium">📂 Materiales de Clase</span>
        </a>
        <a href="/alumno/calificaciones" class="bg-red-100 border border-red-300 p-4 rounded-lg shadow hover:bg-red-200">
            <span class="text-lg font-medium">📄 Calificaciones</span>
        </a>
        <a href="/alumno/dudas" class="bg-purple-100 border border-purple-300 p-4 rounded-lg shadow hover:bg-purple-200">
            <span class="text-lg font-medium">📧 Dudas al Profesor</span>
        </a>
    </div>

    <div class="mt-6 text-center">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                Cerrar sesión
            </button>
        </form>
    </div>
@endsection





