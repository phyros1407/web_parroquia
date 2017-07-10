<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title') | Familia Don de Dios</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/palette.css')}}">
    </head>
    <body>
        @section('header')
            <div class="mdl-layout mdl-js-layout ">
                <header class="mdl-layout__header mdl-layout__header--scroll default-primary-color mdl-shadow--4dp">
                    <div class="mdl-layout__header-row">
                        <!-- Title -->
                        <span class="mdl-layout-title">@yield('title') | Familia Don de Dios</span>
                        <!-- Add spacer, to align navigation to the right -->
                        <div class="mdl-layout-spacer"></div>
                        <!-- Navigation -->
                        <nav class="mdl-navigation">
                            <a class="mdl-navigation__link" href="/home">Eventos</a>
                            <a class="mdl-navigation__link" href="">Link</a>
                            <a class="mdl-navigation__link" href="">Link</a>
                            <a class="mdl-navigation__link" href="">Link</a>
                        </nav>
                    </div>
                </header>
                <div class="mdl-layout__drawer">
                    <span class="mdl-layout-title">Title</span>
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link" href="">Link</a>
                        <a class="mdl-navigation__link" href="">Link</a>
                        <a class="mdl-navigation__link" href="">Link</a>
                        <a class="mdl-navigation__link" href="">Link</a>
                    </nav>
                </div>
                <main class="mdl-layout__content">
                    <div class="page-content">


                        <div class="container">
                            @yield('content')
                        </div>

                    </div>
                </main>
            </div>
        @show

    </body>
</html>