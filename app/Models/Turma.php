<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';
   
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'codigo',
        'ano_inicio',
        'ano_conclusao',
        'id_turma'
    ];
}