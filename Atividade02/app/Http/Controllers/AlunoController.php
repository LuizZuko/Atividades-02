<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

public function create()
{
    $this->authorize('create', Aluno::class);

    return view('alunos.create');
}

public function edit(Aluno $aluno)
{
    $this->authorize('update', $aluno);

    return view('alunos.edit', compact('aluno'));
}

public function destroy(Aluno $aluno)
{
    $this->authorize('delete', $aluno);

    $aluno->delete();

    return redirect()->route('alunos.index');
}
    
    public function porCurso($curso)
    {
        $alunos = Aluno::where('curso', $curso)->get();
        return view('alunos.index', compact('alunos'));
    }

    
    public function buscarPorNome($termo)
    {
        $alunos = Aluno::where('nome', 'like', "%{$termo}%")->get();
        return view('alunos.index', compact('alunos'));
    }

    public function recentes()
    {
        $alunos = Aluno::where('created_at', '>=', now()->subDays(7))->get();
        return view('alunos.index', compact('alunos'));
    }

    public function total()
    {
        $totalAlunos = Aluno::count();
        return "Total de alunos cadastrados: {$totalAlunos}";
    }
}