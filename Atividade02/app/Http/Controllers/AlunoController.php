<?php

namespace App\Http\Controllers;

abstract class AlunoController
{
     public function index()
    {
        $alunos = Aluno::all();
        
        return view('alunos.index', compact('alunos'));
    }
}