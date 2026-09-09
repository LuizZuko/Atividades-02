@extends('layouts.app')

@section('title', 'Alunos')

@section('content')

<h1>Lista de Alunos</h1>

@if(count($alunos) > 0)

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    @foreach($alunos as $aluno)
    <tr>
        <td>{{ $aluno->id }}</td>
        <td>{{ $aluno->nome }}</td>
        <td>{{ $aluno->email }}</td>
        <td>
            <a href="{{ url('/alunos/' . $aluno->id) }}">Ver</a>
        </td>
    </tr>
    @endforeach

</table>

@else

<p>Nenhum aluno cadastrado.</p>

@endif

@endsection