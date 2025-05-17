@extends('layouts.app')

@section('title', 'Materiales del Alumno')

@section('content')
    <div class="text-center mb-10">
        <h2 class="text-2xl font-bold">Materiales del Curso</h2>
        <p class="text-gray-600 mt-2">Aquí aparecerán los materiales asignados a tus cursos. (En desarrollo)</p>
    </div>

    <div class="text-center">
        <a href="{{ route('alumno') }}" class="mt-4 inline-block text-blue-500 hover:underline">
            ← Volver al panel del alumno
        </a>
    </div>
@endsection
