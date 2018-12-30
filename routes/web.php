<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return 'teste';
});
//Poderes
Route::get('/poderes/index', 'PoderesController@index');
Route::get('/poderes/show{id}', 'PoderesController@find');
Route::get('/poderes/filter', 'PoderesController@findByNome');

//Iniciativa
Route::get('/iniciativa', 'IniciativaController@index');

//Tormenta
Route::get('/tormenta', 'TormentaController@index');

//M&M
