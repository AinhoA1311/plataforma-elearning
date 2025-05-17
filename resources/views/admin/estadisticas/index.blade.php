@extends('layouts.app')

@section('title', 'Estadísticas Generales')

@section('content')
<div class="container text-center">
    <h1 class="text-green text-3xl font-bold mb-4">📊 Estadísticas Generales</h1>
    <p class="text-green-300 mb-6">Consulta los datos clave de la plataforma.</p>

    <div class="grid">
        <div class="card">
            <h2 class="text-green-300 text-xl font-semibold mb-2">Total de Usuarios</h2>
            <p class="text-green-100 text-lg">{{ $totalUsuarios }}</p>
        </div>
        <div class="card">
            <h2 class="text-green-300 text-xl font-semibold mb-2">Total de Cursos</h2>
            <p class="text-green-100 text-lg">{{ $totalCursos }}</p>
        </div>
        <div class="card">
            <h2 class="text-green-300 text-xl font-semibold mb-2">Total de Materiales</h2>
            <p class="text-green-100 text-lg">{{ $totalMateriales }}</p>
        </div>
        <div class="card">
            <h2 class="text-green-300 text-xl font-semibold mb-2">Media de Cursos por Usuario</h2>
            <p class="text-green-100 text-lg">{{ number_format($mediaCursosPorUsuario, 2) }}</p>
        </div>
    </div>

    <div class="mt-6">
        <a href="{{ route('admin') }}" class="btn">← Volver al panel</a>
    </div>
</div>
@endsection


