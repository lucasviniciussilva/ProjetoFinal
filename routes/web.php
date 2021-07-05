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
    return view('welcome');
});

Route::get('/cadastro', 'CadastroController@create');
Route::post('/cadastro', 'CadastroController@store')->name('cadastrar_pessoa');
Route::get('/mostra', 'CadastroController@mostrar');
Route::get('/editar/{id}', 'CadastroController@editar');
Route::post('/editar/{id}', 'CadastroController@atualizar')->name('atualizar_pessoa');
Route::get('/excluir/{id}', 'CadastroController@excluir');
Route::post('/excluir/{id}', 'CadastroController@deletar')->name('excluir_pessoa');
