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
        <script src="{{asset('js/bootstrap-clockpicker.min.js')}}"></script>
        <script src="{{asset('js/jquery-clockpicker.min.js')}}"></script>
        <script src="{{asset('locales/bootstrap-datepicker.es.min.js')}}"></script>

        <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('css/mis_estilos.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-clockpicker.css')}}">

    </head>
    <body>
        @section('header')
            <nav class="navbar default-primary-color">
                <div class="container-fluid ">
                    <div class="navbar-header ">
                        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar" style="background-color: #FF9800;margin-top: 15px">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand" style="color: white;" href="#">Familia Don de Dios</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar" >
                        <ul class="nav navbar-nav ">
                            <li class="active "><a href="/home" class="text-primary-color">Home</a></li>
                            <li><a href="/eventos" class="text-primary-color">Eventos</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/logout" class="text-primary-color" id="icono"><span id="icono" class="glyphicon glyphicon-log-out text-primary-color"></span> Salir</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

                @yield('content')

        @show
        <!--
        <footer>
            <div class="container" id="footer">
                <p style="color: white;">Familia Don de Dios © 2017 VF Consulting S.A.C </p>
            </div>
        </footer>
        -->
    </body>
</html>