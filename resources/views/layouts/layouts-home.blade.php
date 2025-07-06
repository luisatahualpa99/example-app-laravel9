<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard DASHLY</title>
    <!-- Carga de Tailwind CSS -->
    <link href="{{asset('/css/style-home.css?vs=').filemtime('css/style-home.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('/js/tailwind-3.4.16.js')}}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome para los iconos -->
    <link href="{{asset('/css/font-awesome-6.5.2.min.css?vs=').filemtime('css/font-awesome-6.5.2.min.css')}}" rel="stylesheet" type="text/css">

    

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
