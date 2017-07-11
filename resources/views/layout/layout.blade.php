<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title') | Familia Don de Dios</title>
        <link rel="stylesheet" href="{{asset('css/palette.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            #buscador {
                width: 130px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-image: url({{asset('images/buscador.png')}});
                background-position: 10px 10px;
                background-repeat: no-repeat;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
            }

            #buscador:focus {
                width: 40%;
            }

            a:hover {
                background-color: white;
                color: #000;
            }
            #icono:hover{
                background-color: white;
                color: #000;
            }
        </style>
        <script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("buscador");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>

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