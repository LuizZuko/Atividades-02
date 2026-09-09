<?php
use App\Http\Controllers\AlunoController;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return 'Painel Administrativo do Sistema Escolar';
    });
});

Route::middleware(['auth', 'role:professor'])->group(function () {
    Route::get('/professor', function () {
        return 'Área Exclusiva dos Professores';
    });
});