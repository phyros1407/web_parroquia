<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title') | Familia Don de Dios</title>
        <link rel="stylesheet" href="{{asset('css/palette.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('js/mis_js.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('locales/bootstrap-datepicker.es.min.js')}}">
        <link rel="stylesheet" href="{{asset('css/mis_estilos.css')}}">
        <style>


        </style>
    </head>
    <body>
        @section('header')
            <nav class="navbar default-primary-color">
                <div class="container-fluid ">
                    <div class="navbar-header ">
                        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand text-primary-color" href="#">Familia Don de Dios</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar" >
                        <ul class="nav navbar-nav ">
                            <li class="active "><a href="#" class="text-primary-color">Home</a></li>
                            <li><a href="/eventos" class="text-primary-color">Eventos</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/logout" class="text-primary-color" id="icono"><span id="icono" class="glyphicon glyphicon-log-out text-primary-color"></span> Salir</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="">
                @yield('content')
            </div>
        @show

    </body>
</html>