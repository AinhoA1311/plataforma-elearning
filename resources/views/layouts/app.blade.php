<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}"></script>

</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl p-6 bg-white shadow-lg rounded-xl">
        @yield('content')
    </div>
</body>
</html>
