
@extends('layout')
@section('content')
 
<div class="card">
    <div class="card-header">Adicionar Novo Turma</div>
        <div class="card-body">
            <form action="{{ url('turma') }}" method="post">
                {!! csrf_field() !!}
                <label>Codigo</label></br>
                <input type="text" name="codigo" id="codigo" class="form-control" required></br>
                <label>Ano de Inicio</label></br>
                <input type="number" name="ano_inicio" id="ano_inicio" class="form-control" required></br>
                <label>Ano de Conclusão</label></br>
                <input type="number" name="ano_conclusao" id="ano_conclusao" class="form-control" required></br>
                <input type="hidden" name="id_turma" id="id_turma" value="{{auth()->user()->id}}" />
                <input type="submit" value="Salvar" class="btn btn-success">
                <a class="btn btn-light" href="/turma" role="button">Voltar</a>
            </form>
            
        </div>
    </div>
</div>
 
@stop