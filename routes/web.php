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
    return view('layout');
});



Route::get('lista-autoridades', function () {
    return view('lista-autoridades');
});


// NOTICIAS
Route::get('noticias', ['as' => 'noticia.index', 'uses' => 'NoticiaController@index']);
Route::get('noticias/create', ['as' => 'noticia.create', 'uses' => 'NoticiaController@create']);
Route::post('noticias', ['as' => 'noticia.store', 'uses' => 'NoticiaController@store']);
Route::get('noticias/{id}', ['as' => 'noticia.show', 'uses' => 'NoticiaController@show']);