@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Informações (Notas / Frequência)</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Nome : {{ $alunos->nome }}</h5></br>
                <p class="card-text">Matrícula : {{ $alunos->matricula }}</p>
                <p class="card-text">Turma : <b>{{ $alunos->turma }}</b></p>
                <p class="card-text">E-mail : {{ $alunos->email }}</p>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-borderless">
                <thead class="table-secondary">
                    <tr>
                        <th/>
                        <th>Disciplina</th>
                        <th>Nota</th>
                        <th>Frequencia</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i < 6; $i++)
                        <?php
                            $disciplina = 'disciplina' . $i;
                            $nota = 'nota_d' . $i;
                            $frequencia = 'frequencia_d' . $i;
                        ?>
                        <tr>
                            <td/>
                            <td>{{ $alunos->$disciplina }}</td>
                            <td>{{ $alunos->$nota }}</td>
                            <td>{{ $alunos->$frequencia }}</td>
                        </tr>
                    @endfor                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection