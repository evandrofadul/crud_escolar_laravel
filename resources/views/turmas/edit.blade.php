@extends('layout')
@section('content')

<div class="container">
	<div class="card">
  		<div class="card-header">Informações de Turma</div>
  			<div class="card-body">
        		<h5 class="card-title">Turma : {{ $turmas->codigo }}</h5>
  			</div>
       
			<div class="table-responsive">
                <table class="table table-striped table-borderless">
                    <thead class="table-dark">
                        <tr>
                            <th/>
                            <th>Nome do Aluno</th>
                            <th>Matrícula</th>
                            <th>E-mail</th>
                            <th />
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($alunos as $item)
                            @if($turmas->codigo == $item->turma)
                            	<tr>
                                    <td/>
                                    <td>{{ $item->nome }}</td>
                                    <td>{{ $item->matricula }}</td>
                                    <td>{{ $item->email }}</td>

                                    <td>
                                    	<div class="btn-group">
                                            <a href="{{ url('/aluno/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                        </div>
                                        <form method="POST" action="{{ url('/aluno' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline"> {{ method_field('DELETE') }} {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm delete?')"><i class="fa-regular fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-light" href="/turma" role="button">Voltar</a>
		</div>
	</div>
</div>

@endsection