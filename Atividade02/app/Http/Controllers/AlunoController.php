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

        
        $aluno = Aluno::create($validated);

        return redirect()->route('alunos.show', $aluno->id)
                         ->with('success', 'Aluno criado com sucesso!');
    }



     /**
     * 4. SHOW - Exibir detalhes de um aluno específico
     * GET /alunos/{id}
     */
    public function show(Aluno $aluno)
    {
        // Retorna a view com os detalhes do aluno
        return view('alunos.show', compact('aluno'));
    }

    /**
     * 5. EDIT - Exibir formulário para editar um aluno
     * GET /alunos/{id}/edit
     */
    public function edit(Aluno $aluno)
    {
        // Retorna formulário preenchido com dados do aluno
        return view('alunos.edit', compact('aluno'));
    }



























}