@extends('layouts.app')

@section('title', 'Login')

@section('content')

<h1>Login</h1>

@if($errors->any())
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
@endif

<form action="{{ route('login.autenticar') }}" method="POST">

    @csrf

    <label>Email:</label>
    <input type="email" name="email">

    <label>Senha:</label>
    <input type="password" name="password">

    <button type="submit">Entrar</button>

</form>

@endsection