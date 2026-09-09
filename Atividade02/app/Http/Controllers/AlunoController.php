<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Requests\AlunoRequest;


class AlunoController extends Controller
{

public function store(AlunoRequest $request)
{
    Aluno::create($request->validated());

    return redirect()->route('alunos.index');
}

public function index()
    {
        $alunos = Aluno::all();
        
        return view('alunos.index', compact('alunos'));
    }

    public function create()
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

    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    public function edit(Aluno $aluno)
    {
        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, Aluno $aluno)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:alunos,email,' . $aluno->id,
            'matricula' => 'required|unique:alunos,matricula,' . $aluno->id,
            'data_nascimento' => 'nullable|date',
            'telefone' => 'nullable|string',
        ]);

        $aluno->update($validated);

        return redirect()->route('alunos.show', $aluno->id)
                         ->with('success', 'Aluno atualizado com sucesso!');
    }

    public function destroy(Aluno $aluno)
    {
        $nome = $aluno->nome;

        $aluno->delete();

        return redirect()->route('alunos.index')
                         ->with('success', "Aluno {$nome} deletado com sucesso!");
    }
}