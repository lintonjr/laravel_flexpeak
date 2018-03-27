<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Curso;

use App\Professor;

use App\Aluno;

use App\Http\Requests\CursoRequest;

use PDF;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::with('professor')->get();
        return view('curso.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professores = Professor::all();
        return view('curso.create',compact('professores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CursoRequest $request)
    {
        $cursos = new Curso([
            'nome' => $request->nome,
            'professor_id' => $request->professor,
        ]);
        $cursos->save();
        return redirect('/cursos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursos = Curso::find($id);
        return view('curso.show',compact('cursos'));
    }

        public function mostrar($id)
        {

            $curso = Curso::findOrFail($id);
            $alunos = $curso->alunos;
            return view('curso.mostrar', compact('curso', 'alunos'));
            
        }

        public function downloadPDF($id)
        {
          $curso = Curso::find($id);
          $pdf = PDF::loadView('curso.pdf', compact('curso'));
          return $pdf->stream('invoice.pdf');

        }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $cursos = Curso::findOrFail($id);
        $professores = Professor::all();
        return view('curso.edit', compact('cursos', 'professores'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CursoRequest $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->nome = $request->nome;
        $curso->professor_id = $request->professor;
        $curso->save();
        return redirect('/cursos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cursos = Curso::find($id);
        $cursos->delete();

      return redirect('/cursos');
    }
}
