@extends('layouts.app')

@section('title', 'Panel de Administración')

@section('content')
<div class="container text-center">
    <h1 class="text-green">Panel de Administración</h1>
    <p>Gestiona cursos, usuarios, materiales y estadísticas desde aquí.</p>

    <div class="grid">
        <a href="{{ route('admin.cursos.index') }}" class="card">
            <h2>Gestión de Cursos</h2>
            <p>Crea, edita y organiza los cursos fácilmente.</p>
        </a>
        <a href="{{ route('admin.usuarios.index') }}" class="card">
            <h2>Usuarios</h2>
            <p>Administra alumnos y profesores.</p>
        </a>
        <a href="{{ route('admin.materiales.index') }}" class="card">
            <h2>Materiales</h2>
            <p>Comparte contenido educativo para los cursos.</p>
        </a>
        <a href="{{ route('admin.estadisticas.index') }}" class="card">
            <h2>Estadísticas</h2>
            <p>Consulta datos sobre el rendimiento de los alumnos.</p>
        </a>
    </div>

    <a href="{{ url('/') }}" class="btn">← Volver al inicio</a>
</div>
@endsection

