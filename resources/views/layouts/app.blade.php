<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Plataforma E-learning')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Cabecera -->
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-4 px-6 flex flex-col sm:flex-row justify-between items-center gap-4">
        <div class="flex items-center gap-2">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto">
            <h1 class="text-xl font-bold text-gray-800 whitespace-nowrap">Plataforma E-learning</h1>
        </div>
        <nav>
            <ul class="flex flex-col sm:flex-row gap-2 sm:gap-6 text-gray-700 font-medium text-center">
                <li><a href="{{ route('dashboard') }}" class="hover:text-blue-600">Inicio</a></li>
                <li><a href="{{ route('admin') }}" class="hover:text-blue-600">Administración</a></li>
                <li><a href="{{ route('alumno') }}" class="hover:text-blue-600">Alumno</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="hover:text-red-600">Cerrar sesión</button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</header>

    <!-- Contenido principal -->
    <main class="py-10 px-6">
        @yield('content')
    </main>

    <!-- Pie de página -->
    <footer class="bg-white shadow mt-10 py-4 text-center text-sm text-gray-500">
        © 2025 Plataforma E-learning. Todos los derechos reservados.
    </footer>

</body>
</html>