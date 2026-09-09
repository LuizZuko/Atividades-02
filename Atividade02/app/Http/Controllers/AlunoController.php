<?php

namespace App\Http\Controllers;

abstract class AlunoController
{
     public function index()
    {
        $alunos = Aluno::all();
        
        return view('alunos.index', compact('alunos'));
    }


   {
        
        return view('alunos.create');
    }

 public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:alunos',
            'matricula' => 'required|unique:alunos',
            'data_nascimento' => 'nullable|date',
            'telefone' => 'nullable|string',
        ]);


























}