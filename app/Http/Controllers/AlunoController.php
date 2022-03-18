<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;
 
class AlunoController extends Controller
{

    public function index()
    {
        return abort(404);
    }
 
    public function create()
    {
        $turmas = Turma::all();
        return view('alunos.create')->with('turmas', $turmas);
    }
 
    public function store(Request $request)
    {
        $input = $request->all();
        Aluno::create($input);
        return redirect('turma');  
    }
 
    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show')->with('alunos', $aluno);
    }
 
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit')->with('alunos', $aluno);
    }
 
    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $input = $request->all();
        $aluno->update($input);
        return redirect('turma');  
    }
 
    public function destroy($id)
    {
        Aluno::destroy($id);
        return redirect('turma');  
    }
    
}