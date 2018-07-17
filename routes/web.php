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
    return "Seja bem vindo ao curso basico de Laravel";
});

// Criando um grupo de rotas (Rotas admin):
Route::group(['prefix' => 'admin'], function () {
    // Declarando as Rotas:
    Route::resource('clientes', 'CustomersController');

});
