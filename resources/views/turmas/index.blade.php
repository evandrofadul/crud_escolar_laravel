@extends('layout')
@section('content')

<div class="container">
    <div class="card">
        <div class="col-md-12 offset-md-0">
            <div class="card">
                <div class="card-header">
                    <h3>Logado como: {{ auth()->user()->name }}<h3>
                </div>
                <div class="card-body">
                    <a href="{{ url('/turma/create') }}" class="btn btn-primary btn-sm" title="Add New Turma">
                        <i class="fa fa-plus" aria-hidden="true"></i> Criar Nova Turma
                    </a>
                    <a href="{{ url('/aluno/create') }}" class="btn btn-success btn-sm" title="Add New Aluno">
                        <i class="fa fa-plus" aria-hidden="true"></i> Adicionar Novo Aluno
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead class="table-dark">
                            <tr>
                                <th/>
                                <th>Codigo da Turma</th>
                                <th>Ano de Inicio</th>
                                <th>Ano de Conclusão</th>
                                <th/>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($turmas as $item)
                                @if(auth()->user()->id == $item->id_turma)
                                <tr>
                                    <td/>
                                    <td>{{ $item->codigo }}</td>
                                    <td>{{ $item->ano_inicio }}</td>
                                    <td>{{ $item->ano_conclusao }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('/turma/' . $item->id) }}" class="btn btn-primary btn-sm" aria-current="page"><i class="fa-regular fa-eye"></i> Visualizar</a>
                                            <a href="{{ url('/turma/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i> Editar</a>
                                        </div>
                                        <form method="POST" action="{{ url('/turma' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline"> {{ method_field('DELETE') }} {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirmar Exclusão')"><i class="fa-regular fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<p><a href="{{ route('user.logout') }}">Desconectar</a></p>

@endsection