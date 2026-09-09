@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')

<h1>Detalhes do Aluno</h1>

@if($aluno)

<p><strong>ID:</strong> {{ $aluno->id }}</p>
<p><strong>Nome:</strong> {{ $aluno->nome }}</p>
<p><strong>Email:</strong> {{ $aluno->email }}</p>

<a href="{{ url('/alunos') }}">Voltar para lista</a>

@else

<p>Aluno não encontrado.</p>

@endif

@endsection