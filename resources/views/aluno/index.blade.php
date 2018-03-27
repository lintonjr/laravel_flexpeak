<!-- index.blade.php -->
@extends('templates.master')
@section('conteudo-view')

  <div class="container">
    <br>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ action('AlunoController@create') }}"> Cadastrar Aluno</a>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Curso</th>
        <th>Nascimento</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th colspan="2">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($alunos as $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->nome}}</td>
        <td>{{$value->curso->nome}}</td>
        <td>{{$value->data_nascimento}}</td>
        <td>{{$value->cidade}}</td>
        <td>{{$value->estado}}</td>
        <td><a href="{{action('AlunoController@edit', $value->id)}}" class="btn btn-warning">Editar</a></td>
        <td><a href="{{action('AlunoController@show', $value->id)}}" class="btn btn-success">Detalhes</a></td>
        <td><form action="{{action('AlunoController@destroy', $value->id)}}" method="post">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection