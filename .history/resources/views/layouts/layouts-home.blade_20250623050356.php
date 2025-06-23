<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard DASHLY</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/styles-home.css')}}">

</head>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard DASHLY</title>
    <link rel="stylesheet" href="../css/styles-home.css">

</head>
<body>

    <!-- Barra lateral de navegación -->
    @include('layouts.sidebar')

    <!-- Contenido principal -->
    @include('layouts.main-content')

    <script src="{{asset('js/')}}"></script>
</body>
</html>
