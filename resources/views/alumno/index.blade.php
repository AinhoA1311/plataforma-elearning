
@extends('layouts.app')

@section('title', 'Panel del Alumno')

@section('content')
<div class="container text-center">
    <h1 class="text-green">Bienvenido al panel del alumno</h1>
    <p>Hola, {{ Auth::user()->name }}. Accede a tus secciones de estudio.</p>

    <div class="grid">
        <div class="card">
            <h2><a href="{{ route('alumno.cursos') }}">Mis Cursos</a></h2>
            <p>Consulta tus cursos asignados.</p>
        </div>
        <div class="card">
            <h2><a href="{{ route('alumno.materiales') }}">Materiales</a></h2>
            <p>Accede a los materiales disponibles.</p>
        </div>
        <div class="card">
            <h2><a href="{{ route('alumno.estadisticas') }}">Estadísticas</a></h2>
            <p>Consulta tu progreso académico.</p>
        </div>
        <div class="card">
            <h2><a href="{{ route('alumno.foro') }}">Foro / Comunidad</a></h2>
            <p>Participa en debates con otros alumnos. (En desarrollo)</p>
        </div>
    </div>

    <a href="{{ url('/') }}" class="btn">← Volver al inicio</a>
</div>
@endsection
