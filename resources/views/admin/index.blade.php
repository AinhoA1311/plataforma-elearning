@extends('layouts.app')

@section('title', 'Panel de Administración')

@section('content')
<div class="container text-center">
    <h1 class="text-green">Bienvenida al panel de administración</h1>
    <p>Hola, Ainhoa. Accede a las secciones de gestión de la plataforma.</p>

    <div class="grid">
        <div class="card">
            <h2><a href="{{ route('admin.usuarios.index') }}">👥 Gestionar Usuarios</a></h2>
            <p>Administra los usuarios registrados en la plataforma.</p>
        </div>
        <div class="card">
            <h2><a href="{{ route('admin.cursos.index') }}">📚 Gestionar Cursos</a></h2>
            <p>Añade, edita o elimina los cursos disponibles.</p>
        </div>
        <div class="card">
            <h2><a href="{{ route('admin.materiales.index') }}">📁 Materiales</a></h2>
            <p>Sube materiales educativos y organiza recursos.</p>
        </div>
        <div class="card">
            <h2><a href="{{ route('admin.estadisticas.index') }}">📊 Estadísticas</a></h2>
            <p>Consulta los datos y el progreso de la plataforma.</p>
        </div>
    </div>

    <a href="{{ url('/') }}" class="btn mt-6">← Volver al inicio</a>
</div>
@endsection


