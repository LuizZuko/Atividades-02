<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Página Sobre';
});

Route::get('/alunos', function () {
    return 'Lista de Alunos';
});

Route::get('/contato', function () {
    return 'Página de Contato';
});

// rotas com parametros

Route::get('/produto/{id}', function ($id) {
    return "Exibindo o produto com ID: {$id}";
});

Route::get('/categoria/{id}', function ($id) {
    return "Exibindo a categoria com ID: {$id}";
});

Route::get('/usuario/{id}', function ($id) {
    return "Exibindo o usuário com ID: {$id}";
});