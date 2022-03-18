<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nome',
        'matricula',
        'turma',
        'email',
        'disciplina1',
        'nota_d1',
        'frequencia_d1',
        'disciplina2',
        'nota_d2',
        'frequencia_d2',
        'disciplina3',
        'nota_d3',
        'frequencia_d3',
        'disciplina4',
        'nota_d4',
        'frequencia_d4',
        'disciplina5',
        'nota_d5',
        'frequencia_d5',
        'id_user'
    ];
}