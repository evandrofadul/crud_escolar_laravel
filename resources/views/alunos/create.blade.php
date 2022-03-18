@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Adicionar Novo Aluno</div>
    <div class="card-body">
      <form action="{{ url('aluno') }}" method="post">
        {!! csrf_field() !!}
        <label>Nome</label></br>
        <input type="text" name="nome" id="nome" class="form-control" required></br>
        <label>Matricula</label></br>
        <input type="text" name="matricula" id="matricula" class="form-control" required></br>
        <label for="turma">Turma</label></br>
        <select name ="turma" id="turma" class="form-control">
          <option selected>Selecione uma turma</option>
          @foreach($turmas as $item)
            <option>{{ $item->codigo }}</option>
          @endforeach
        </select>
        </br><label>E-mail</label></br>
        <input type="text" name="email" id="email" class="form-control" required></br>
        <input type="hidden" name="id_user" id="id_user" value="{{auth()->user()->id}}" />
        <input type="submit" value="Salvar" class="btn btn-success">
        <a class="btn btn-light" href="/turma" role="button">Voltar</a>
      </form>
    </div>
  </div>
</div>

@stop