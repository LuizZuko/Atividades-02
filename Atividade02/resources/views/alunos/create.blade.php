<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</div>
@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')

<h1>Cadastrar Aluno</h1>

<form action="{{ route('alunos.store') }}" method="POST">
    @csrf

    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <button type="submit">Cadastrar</button>
</form>

@endsection