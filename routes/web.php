<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', ['before' => 'guest', function(){

    return view('index');

}]);

Route::get('/hidden',['before'=>'auth', function(){

    return view('hidden');

}]);

Route::post('login',['uses'=>'AuthController@doLogin', 'before' => 'guest']);
Route::get('/logout',['uses'=>'AuthController@doLogout', 'before' => 'auth']);