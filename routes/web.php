<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return 'Olá, seja bem vindo ao curso!'; //função de callback
// });

Route::get('/', 'PrincipalController@principal'); //chamando o método do controller

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

Route::get(
    '/contato/{nome}/{categoria?}/{assunto?}/{mensagem?}',
    function(string $nome, string $categoria = 'N/A', string $assunto = 'N/A 2', string $mensagem = 'N/A 3') {
        echo "Estamos aqui, $nome - $assunto - $categoria - $mensagem";
});
