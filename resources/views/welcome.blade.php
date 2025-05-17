@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container text-center">
    <h1 class="text-green text-3xl font-bold mb-4">Bienvenido/a a la Plataforma E-learning</h1>
    <p class="text-green-300">Explora nuestras funcionalidades o accede directamente como alumno o administrador.</p>

    <div class="grid mt-8">
        <div class="card">
            <h2 class="text-xl font-bold mb-2">🎓 Acceso Alumno</h2>
            <p class="mb-4">Entra a tu panel para consultar tus cursos, materiales y progreso académico.</p>
            <a href="{{ route('alumno') }}" class="btn">→ Ir al panel de alumno</a>
        </div>
        <div class="card">
            <h2 class="text-xl font-bold mb-2">🛠️ Acceso Administrador</h2>
            <p class="mb-4">Gestiona cursos, usuarios, materiales y estadísticas desde aquí.</p>
            <a href="{{ route('admin') }}" class="btn">→ Ir al panel de admin</a>
        </div>
        <div class="card">
            <h2 class="text-xl font-bold mb-2">📚 Catálogo de Cursos</h2>
            <p class="mb-4">Consulta los cursos disponibles para alumnos.</p>
            <a href="{{ route('catalogo') }}" class="btn">→ Ver catálogo</a>
        </div>
        <div class="card">
            <h2 class="text-xl font-bold mb-2">ℹ️ Información de la Academia</h2>
            <p class="mb-4">Descubre quiénes somos y cómo contactar con nosotros.</p>
            <a href="{{ route('sobre') }}" class="btn">→ Más información</a>
        </div>
    </div>
</div>
@endsection






