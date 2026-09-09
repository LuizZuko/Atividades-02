<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    
    public function porCurso($curso)
    {
<<<<<<< HEAD
        $alunos = Aluno::where('curso', $curso)->get();
        return view('alunos.index', compact('alunos'));
    }

    
    public function buscarPorNome($termo)
    {
        $alunos = Aluno::where('nome', 'like', "%{$termo}%")->get();
        return view('alunos.index', compact('alunos'));
=======
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
>>>>>>> tema-7
    }

    public function recentes()
    {
<<<<<<< HEAD
        $alunos = Aluno::where('created_at', '>=', now()->subDays(7))->get();
        return view('alunos.index', compact('alunos'));
    }

    public function total()
    {
        $totalAlunos = Aluno::count();
        return "Total de alunos cadastrados: {$totalAlunos}";
=======
        Aluno::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'curso' => $request->curso,
        ]);

        return redirect()->route('alunos.index');
    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', compact('aluno'));
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'curso' => $request->curso,
        ]);

        return redirect()->route('alunos.index');
    }

    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()->route('alunos.index');
>>>>>>> tema-7
    }
}