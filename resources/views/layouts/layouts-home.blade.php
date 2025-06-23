<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard DASHLY</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="{{asset('/css/style-home.css')}}">
</head>
<body>

    <!-- Barra lateral de navegación -->
    @include('layouts.sidebar')

    <!-- Contenido principal -->
    @include('layouts.main-content')

    <script src="{{asset('/js/main.js')}}"></script>
    {{-- <script src="{{asset('/js/main.js?vs=').filemtime('js/main.js')}}"></script> --}}
</body>
</html>
