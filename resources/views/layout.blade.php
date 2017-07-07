<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Mi aplicación</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/palette.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container">

        <header>
            <h1>Mi aplicación</h1>
            <hr />
        </header>
        @yield('content')
    </div>
</body>
</html>