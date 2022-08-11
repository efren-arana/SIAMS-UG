<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('login');
});
Route::get('/create', function(){
    return view('create');
});
Route::get('/recuperar', function(){
    return view('contrasena');
});

Route::post('/login', 'AuthController@login')->name('login');
Route::post('/crear', 'NewController@nuevo')->name('crear');
Route::post('/nueva', 'ContraseñaController@contra')->name('contra');
Route::post('/confirmar', 'ContraseñaController@nuevaContra')->name('nuevaContra');
Route::get('/logout', 'AuthController@logout');


Route::group(['middleware' => ['web', 'custom_auth']], function () {
    Route::get('/analisis', 'PagesController@home')->name('home');
    Route::get('/analisis_trayectoria', 'EclatController@eclat')->name('trayectoria');
    Route::get('/association_rules', 'ARulesController@A_rules')->name('trayectoria_AR');
    Route::get('/puntos', 'CoordenadasController@puntos')->name('puntito');
    Route::get('/puntos/eclat', 'EclatController@puntos')->name('puntos_eclat');
    Route::get('/puntos/a_rules', 'ARulesController@puntos')->name('puntos_a_rules');
    Route::get('/preanalisis', 'ARulesController@preanalisis')->name('preanalisis_a_rules');
    Route::get('/algoritmo/a_rules', 'ARulesController@algoritmo')->name('algoritmo_a_rules');
    Route::get('/algoritmo/eclat', 'EclatController@algoritmo')->name('eclat');
    Route::get('/algoritmo', 'CoordenadasController@algoritmo')->name('kmeans');
});


//Route::get('/analisis', 'PagesController@home')->name('home');
//Route::get('/puntos', 'CoordenadasController@puntos')->name('puntito');
//Route::get('/algoritmo', 'CoordenadasController@algoritmo')->name('kmeans');
Route::get('/servicioKmeans', 'CoordenadasController@servicioKmeans')->name('kmeans');

// Prediction routers
Route::group(['middleware' => ['web', 'custom_auth']], function(){
    Route::get('/prediction', 'PagesController@prediction')->name('prediction');
    Route::post('/getprediction', 'PredictionController@getprediction')->name('getprediction');
    Route::post('/getcoordinates', 'PredictionController@getDataCoordinates')->name('getDataCoordinates');
});

//administracion modulo
Route::group(['middleware' => ['web', 'custom_auth']], function(){
    Route::get('/arquitectura_asociacion', 'AdministracionController@asociacion')->name('arquitectura_asociacion');
    Route::get('/monitoreo_siams', 'MonitoreoController@index')->name('monitoreo_siams');

});
