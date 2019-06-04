<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
use App\User;

Route::get('/', function () {
    return view('login');
});

Route::get('login', function () {
    return view('login');
});

Route::post('validar', 'LoginController@validar');

Route::get('logout', function() {
    Auth::logout();
    return view('login');
});

Route::group(['middleware' => 'auth'], function() {
    Route::resource('usuarios', 'UsuariosController');
    Route::resource('horarios', 'HorariosController');
    Route::get('perfiles', function() {
        return view('perfiles');
    });
});


