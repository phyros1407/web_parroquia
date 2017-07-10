<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/palette.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col"></div>
        <div class="mdl-cell mdl-cell--4-col" align="center">
            <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="height: auto">
                <div class="mdl-card__title default-primary-color   ">
                    <h2 class="mdl-card__title-text text-primary-color">Familia Don de Dios</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <form action="/home" method="post" id="login">
                        {{csrf_field()}}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="usuario" name="usuario"/>
                            <label class="mdl-textfield__label secondary-text-color " for="usuario">Usuario</label>
                        </div>
                        <br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label primary-text-color" >
                            <input class="mdl-textfield__input" type="password" id="password" name="password"/>
                            <label class="mdl-textfield__label secondary-text-color " for="password">Password</label>
                        </div>
                        <br>
                    </form>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <button form="login" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect accent-color text-primary-color" style="float: right">
                        Loguearse
                    </button>
                </div>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--4-col"></div>
    </div>
</body>
</html>