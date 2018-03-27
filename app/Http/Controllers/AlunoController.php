<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aluno;

use App\Curso;

use App\Http\Requests\AlunoRequest;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::with('curso')->get();
        $totalAlunos = Aluno::count();
        return view('aluno.index', compact('alunos', 'totalAlunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('aluno.create', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoRequest $request)
    {
        $alunos = new Aluno([
          'nome' => $request->nome,
          'curso_id' => $request->curso,
          'data_nascimento' => $request->data_nascimento,
          'cep' => $request->cep,
          'logradouro' => $request->logradouro,
          'numero' => $request->numero,
          'bairro' => $request->bairro,
          'cidade' => $request->cidade,
          'estado' => $request->estado
        ]);

        $alunos->save();
        return redirect('/alunos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alunos = Aluno::find($id);
        return view('aluno.show',compact('alunos', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alunos = Aluno::find($id);
        $cursos = Curso::all();  
        return view('aluno.edit', compact('alunos','cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlunoRequest $request, $id)
    {
        $alunos = Aluno::findOrFail($id);
        $alunos->nome = $request->nome;
        $alunos->data_nascimento = $request->data_nascimento;
        $alunos->curso_id = $request->professor;
        $alunos->cep = $request->cep;
        $alunos->logradouro = $request->logradouro;
        $alunos->numero = $request->numero;
        $alunos->bairro = $request->bairro;
        $alunos->cidade = $request->cidade;
        $alunos->estado = $request->estado;
        $alunos->save();
        return redirect('/alunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $alunos = Aluno::find($id);
      $alunos->delete();
      return redirect('/alunos');
    }
}
