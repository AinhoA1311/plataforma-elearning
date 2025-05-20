<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión - Plataforma E-learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-green-400 font-mono">

    <div class="min-h-screen flex flex-col items-center justify-center px-4">
        <div class="w-full max-w-md bg-gray-900 border border-green-500 rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold text-center mb-6">Acceso a la Plataforma</h1>

            @if (session('status'))
                <div class="mb-4 text-sm text-green-300">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 text-red-400 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold mb-1">Correo electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-3 py-2 bg-black border border-green-500 rounded focus:outline-none focus:ring focus:ring-green-600 text-white">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-semibold mb-1">Contraseña</label>
                    <input id="password" type="password" name="password" required
                        class="w-full px-3 py-2 bg-black border border-green-500 rounded focus:outline-none focus:ring focus:ring-green-600 text-white">
                </div>

                <div class="flex items-center mb-4">
                    <input type="checkbox" name="remember" id="remember"
                        class="mr-2 text-green-500 bg-black border border-green-500 focus:ring-green-600">
                    <label for="remember" class="text-sm">Recuérdame</label>
                </div>

                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-green-300 hover:underline">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>

                <button type="submit"
                    class="mt-6 w-full bg-green-600 hover:bg-green-700 text-black font-bold py-2 px-4 rounded transition duration-300">
                    Iniciar sesión
                </button>
            </form>
        </div>
    </div>

</body>
</html>

