<?php

Route::get('/login', ['before' => 'guest', function(){

    return view('login');

}]);

Route::post('home',['uses'=>'AuthController@doLogin', 'before' => 'guest']);
Route::get('/logout',['uses'=>'AuthController@doLogout', 'before' => 'auth']);
Route::get('/eventos', 'EventoController@listar');

//CRUD EVENTO
Route::post('/crear_evento', 'EventoController@crear');
Route::post('/editar_evento', 'EventoController@actualizar');
Route::get('/desa_evento/{id_evento}', 'EventoController@desactivar');
Route::get('/acti_evento/{id_evento}', 'EventoController@activar');

//CRUD ACTIVIDAD
Route::get('/actividades_evento/{id_evento}','ActividadController@listar');
Route::get('/acti_eli/{id_actividad}/{id_evento}','ActividadController@eliminar');