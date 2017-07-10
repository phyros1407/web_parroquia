<?php

Route::get('/login', ['before' => 'guest', function(){

    return view('login');

}]);

Route::post('home',['uses'=>'AuthController@doLogin', 'before' => 'guest']);
Route::get('/logout',['uses'=>'AuthController@doLogout', 'before' => 'auth']);

Route::get('/eventos', 'EventoController@listarEventos');