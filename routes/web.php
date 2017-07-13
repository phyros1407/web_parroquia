<?php


Route::get('/', ['as'=>'login','before' => 'guest', function(){

    return view('login');

}]);

Route::post('login',['uses'=>'AuthController@doLogin', 'before' => 'guest']);


Route::group(['middleware' => 'auth'], function(){

    //CRUD EVENTO
    Route::get('/eventos', 'EventoController@listar');
    Route::post('/crear_evento', 'EventoController@crear');
    Route::post('/editar_evento', 'EventoController@actualizar');
    Route::get('/desa_evento/{id_evento}', 'EventoController@desactivar');
    Route::get('/acti_evento/{id_evento}', 'EventoController@activar');

    //CRUD ACTIVIDAD
    Route::post('/crear_actividad', 'ActividadController@crear');
    Route::post('/editar_actividad', 'ActividadController@editar');
    Route::get('/actividades_evento/{id_evento}','ActividadController@listar');
    Route::get('/acti_eli/{id_actividad}/{id_evento}','ActividadController@eliminar');

    Route::get('/logout',['uses'=>'AuthController@doLogout', 'before' => 'auth']);

});

