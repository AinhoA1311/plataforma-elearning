@extends('layouts.app')

@section('title', 'Catálogo de Cursos')

@section('content')
<div class="container text-center">
    <h1 class="text-green text-3xl font-bold mb-6">📚 Catálogo de Cursos</h1>
    <p class="text-green-300 mb-8">Explora nuestra selección de cursos disponibles para alumnos.</p>

    <div class="grid">
        <div class="card">
            <h2>Laravel desde cero</h2>
            <p>Aprende a desarrollar aplicaciones web modernas con Laravel, el framework PHP más popular.</p>
        </div>
        <div class="card">
            <h2>Frontend con Vue.js</h2>
            <p>Domina el desarrollo de interfaces interactivas con Vue.js y componentes dinámicos.</p>
        </div>
        <div class="card">
            <h2>Seguridad Web</h2>
            <p>Protege tus aplicaciones contra ataques comunes como XSS, CSRF e inyecciones SQL.</p>
        </div>
        <div class="card">
            <h2>HTML5, CSS3 y JavaScript Pro</h2>
            <p>La base esencial para cualquier desarrollador web profesional: estructura, estilo y dinamismo.</p>
        </div>
    </div>

    <div class="mt-8">
        <a href="{{ url('/') }}" class="btn">← Volver al inicio</a>
    </div>
</div>
@endsection

