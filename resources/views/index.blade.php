@extends('layout')
@section('content')
<script>
    window.location.href = "/turma";
</script>
<h1>Logado como: {{ auth()->user()->name }}<h1> <p><a href="{{ route('user.logout') }}">Desconectar</a></p>

@stop