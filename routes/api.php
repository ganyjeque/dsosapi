<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/autenticacao','autenticacaocontroller@adicionar');
Route::get('/listarautenticacao','autenticacaocontroller@mostrar');
Route::get('/listaridautenticacao/{id}','autenticacaocontroller@mostrarporid');
Route::delete('/removerautenticacao/{id}','autenticacaocontroller@remover');


Route::post('/utilizador','utilizadorcontroller@adicionar');
Route::get('/listarutilizador','utilizadorcontroller@mostrar');
Route::get('/utilizador/{id}','utilizadorcontroller@mostrarporid');
Route::delete('/utilizador/{id}','utilizadorcontroller@remover');


Route::post('/musico','musicocontroller@adicionar');
Route::get('/listarmusico','musicocontroller@mostrar');
Route::get('/musico/{id}','musicocontroller@mostrarporid');
Route::delete('/umusicotilizador/{id}','musicocontroller@remover');

Route::post('/vendedor','vendedorcontroller@adicionar');
Route::get('/listarvendedor','vendedorcontroller@mostrar');
Route::get('/vendedor/{id}','vendedorcontroller@mostrarporid');
Route::delete('/vendedor/{id}','vendedorcontroller@remover');

Route::post('/albuns','albunscontroller@adicionar');
Route::get('/listaralbuns','albunscontroller@mostrar');
Route::get('/albuns/{id}','albunscontroller@mostrarporid');
Route::delete('/albuns/{id}','albunscontroller@remover');

Route::post('/single','singlecontroller@adicionar');
Route::get('/listarsingle','singlecontroller@mostrar');
Route::get('/single/{id}','singlecontroller@mostrarporid');
Route::delete('/single/{id}','singlecontroller@remover');

Route::post('/alocar','alocarcontroller@adicionar');
Route::get('/listaralocar','alocarcontroller@mostrar');
Route::get('/alocar/{id}','alocarcontroller@mostrarporid');
Route::delete('/alocar/{id}','alocarcontroller@remover');

Route::post('/localizacao','localizacaocontroller@adicionar');
Route::get('/listarlocalizacao','localizacaocontroller@mostrar');
Route::get('/localizacao/{id}','localizacaocontroller@mostrarporid');
Route::delete('/localizacao/{id}','localizacaocontroller@remover');

Route::post('/venda','vendacontroller@adicionar');
Route::get('/listarvenda','vendacontroller@mostrar');
Route::get('/venda/{id}','vendacontroller@mostrarporid');
Route::delete('/venda/{id}','vendacontroller@remover');
