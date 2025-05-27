<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Plataforma E-learning')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        header {
            background-color: #121212;
            border-bottom: 2px solid #00ff99;
            padding: 1rem;
        }

        .header-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        @media(min-width: 768px) {
            .header-container {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }
        }

        .logo {
            display: flex;
            align-items: center;
            font-weight: bold;
            color: #00ff99;
            font-size: 1.2rem;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
            width: auto;
        }

        nav {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        @media(min-width: 768px) {
            nav {
                flex-direction: row;
                gap: 1.5rem;
            }
        }

        nav a, nav button {
            color: #ccc;
            text-decoration: none;
            background: none;
            border: none;
            font: inherit;
            cursor: pointer;
            transition: color 0.3s;
        }

        nav a:hover, nav button:hover {
            color: #00ff99;
        }

        footer {
            background-color: #121212;
            padding: 2rem 1rem;
            color: #999;
            text-align: center;
            font-size: 0.9rem;
            border-top: 1px solid #00ff99;
        }

        footer a {
            color: #00ff99;
            margin: 0 10px;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo">
            Plataforma E-learning
        </div>
        <nav>
            <a href="{{ url('/') }}">Inicio</a>
            @auth
                @if(Auth::user()->role === 'admin')
                    <a href="{{ route('admin') }}">Administración</a>
                @elseif(Auth::user()->role === 'alumno')
                    <a href="{{ route('alumno') }}">Alumno</a>
                @endif
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div>
            <strong>Contacto:</strong> contacto@plataforma-elearning.com | <strong>Tel:</strong> +34 912 345 678
        </div>
        <div style="margin: 10px 0;">
            <a href="#">Aviso legal</a>
            <a href="#">Política de privacidad</a>
            <a href="#">Términos de uso</a>
        </div>
        <div>© {{ date('Y') }} Plataforma E-learning. Todos los derechos reservados.</div>
    </footer>

    @stack('scripts') {{-- 🔧 Necesario para que se ejecuten scripts como el de descarga del ZIP --}}
</body>
</html>





