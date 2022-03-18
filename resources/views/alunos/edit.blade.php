@extends('layout')
@section('content')
 
<div class="card">
	<div class="card-header">Editar Informações do Aluno</div>
		<div class="card-body">
			<form action="{{ url('aluno/' .$alunos->id) }}" method="post">
				{!! csrf_field() !!}
				@method("PATCH")
				<input type="hidden" name="id" id="id" value="{{$alunos->id}}"/>
				<label>Nome</label></br>
				<input type="text" name="nome" id="nome" value="{{$alunos->nome}}" class="form-control" required></br>
				<label>Matricula</label></br>
				<input type="text" name="matricula" id="matricula" value="{{$alunos->matricula}}" class="form-control" required></br>
				<label>E-mail</label></br>
				<input type="text" name="email" id="email" value="{{$alunos->email}}" class="form-control" required></br>

				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">Disciplina:</span>
					<input type="text" name="disciplina1" id="disciplina1" value="{{$alunos->disciplina1}}" class="form-control" required>
					<span class="input-group-text">Nota:</span>
					<input type="text" name="nota_d1" id="nota_d1" value="{{$alunos->nota_d1}}" class="form-control" required>
					<span class="input-group-text">Frequencia:</span>
					<input type="text" name="frequencia_d1" id="frequencia_d1" value="{{$alunos->frequencia_d1}}" class="form-control" required>
				</div>

				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">Disciplina:</span>
					<input type="text" name="disciplina2" id="disciplina2" value="{{$alunos->disciplina2}}" class="form-control" required>
					<span class="input-group-text">Nota:</span>
					<input type="text" name="nota_d2" id="nota_d2" value="{{$alunos->nota_d2}}" class="form-control" required>
					<span class="input-group-text">Frequencia:</span>
					<input type="text" name="frequencia_d2" id="frequencia_d2" value="{{$alunos->frequencia_d2}}" class="form-control" required>
				</div>

				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">Disciplina:</span>
					<input type="text" name="disciplina3" id="disciplina3" value="{{$alunos->disciplina3}}" class="form-control" required>
					<span class="input-group-text">Nota:</span>
					<input type="text" name="nota_d3" id="nota_d3" value="{{$alunos->nota_d3}}" class="form-control" required>
					<span class="input-group-text">Frequencia:</span>
					<input type="text" name="frequencia_d3" id="frequencia_d3" value="{{$alunos->frequencia_d3}}" class="form-control" required>
				</div>

				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">Disciplina:</span>
					<input type="text" name="disciplina4" id="disciplina4" value="{{$alunos->disciplina4}}" class="form-control" required>
					<span class="input-group-text">Nota:</span>
					<input type="text" name="nota_d4" id="nota_d4" value="{{$alunos->nota_d4}}" class="form-control" required>
					<span class="input-group-text">Frequencia:</span>
					<input type="text" name="frequencia_d4" id="frequencia_d4" value="{{$alunos->frequencia_d4}}" class="form-control" required>
				</div>

				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">Disciplina:</span>
					<input type="text" name="disciplina5" id="disciplina5" value="{{$alunos->disciplina5}}" class="form-control" required>
					<span class="input-group-text">Nota:</span>
					<input type="text" name="nota_d5" id="nota_d5" value="{{$alunos->nota_d5}}" class="form-control" required>
					<span class="input-group-text">Frequencia:</span>
					<input type="text" name="frequencia_d5" id="frequencia_d5" value="{{$alunos->frequencia_d5}}" class="form-control" required>
				</div>
				<input type="submit" value="Update" class="btn btn-success"></br>
			</form>
		</div>
	</div>
</div>
 
@stop