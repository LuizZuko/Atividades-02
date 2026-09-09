@extends('layouts.app')

@section('titulo', 'Editar Aluno')

@section('conteudo')
    <h1>Editar Aluno</h1>

    <form action="/alunos/{{ $aluno->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" value="{{ $aluno->nome }}">
        </div>
        <br>
        <div>
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" value="{{ $aluno->email }}">
        </div>
        <br>
        <div>
            <label for="curso">Curso:</label><br>
            <input type="text" id="curso" name="curso" value="{{ $aluno->curso }}">
        </div>
        <br>
        <button type="submit">Atualizar</button>
    </form>
@endsection
