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

{{-- Aviso de Cookies --}}
<div id="cookie-banner" style="position: fixed; bottom: 0; left: 0; right: 0; background: #000; color: #0f0; padding: 15px; text-align: center; font-family: monospace; z-index: 9999; border-top: 2px solid #0f0;">
    Este sitio utiliza cookies para mejorar tu experiencia. 
    <button onclick="aceptarCookies()" style="margin-left: 10px; padding: 5px 10px; background: #0f0; color: #000; font-weight: bold; border: none; cursor: pointer;">Aceptar</button>
</div>

<script>
    function aceptarCookies() {
        document.getElementById('cookie-banner').style.display = 'none';
        localStorage.setItem('cookies-aceptadas', 'true');
    }

    // Oculta el banner si ya se aceptaron
    if (localStorage.getItem('cookies-aceptadas') === 'true') {
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('cookie-banner').style.display = 'none';
        });
    }
</script>
@endsection







