<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <script src="{{asset('js/materialize.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/palette.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="row">
        <div class="col s4"></div>
        <div class="col s4" align="center">
            <form action="home" method="post">
                {{csrf_field()}}
                <div class="input-field">
                    <input id="icon_prefix" type="text" class="validate" name="usuario">
                    <label  class="active" for="icon_prefix">Usuario</label>
                </div>
                <br>
                <div class="input-field">
                    <input id="icon_telephone" type="tel" class="validate" name="password">
                    <label class="active" for="icon_telephone">Password</label>
                </div>
                <br>
                <button class="btn waves-effect waves-light accent-color text-primary-color" type="submit" style="float: right;">Ingresar
                </button>
            </form>
        </div>
        <div class="mdl-cell mdl-cell--4-col"></div>
    </div>
</body>
</html>