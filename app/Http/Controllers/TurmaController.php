<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Aluno;
 
class TurmaController extends Controller
{
    public function index()
    {
        $turmas = Turma::all();
        return view('turmas.index')->with('turmas', $turmas);
    }
 
    public function create()
    {
        return view('turmas.create');
    }
 
    public function store(Request $request)
    {
        $input = $request->all();
        Turma::create($input);
        return redirect('turma');  
    }
 
    public function show($id)
    {
        $alunos = Aluno::all();
        $turma = Turma::findOrFail($id);
        return view('turmas.show')->with('turmas', $turma)->with('alunos', $alunos);
    }
 
    public function edit($id)
    {
        $alunos = Aluno::all();
        $turma = Turma::findOrFail($id);
        return view('turmas.edit')->with('turmas', $turma)->with('alunos', $alunos);
    }
 
    public function update(Request $request, $id)
    {
        $turma = Turma::findOrFail($id);
        $input = $request->all();
        $turma->update($input);
        return redirect('turma');  
    }
 
    public function destroy($id)
    {
        Turma::destroy($id);
        return redirect('turma');  
    }
}