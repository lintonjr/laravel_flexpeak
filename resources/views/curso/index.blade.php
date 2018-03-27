<!-- index.blade.php -->
@extends('templates.master')
@section('conteudo-view')

  <div class="container">
    <br>
    <div class="pull-right">
        <a class="btn btn-danger" href="{{ action('PdfviewController@index') }}" target="_blank"> PDF</a>
        <a class="btn btn-success" href="{{ action('CursoController@create') }}"> Cadastrar Curso</a>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Professor</th>
        <th>Data de Criação</th>
        <th colspan="31">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cursos as $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->nome}}</td>
        <td>{{$value->professor->nome}}</td>
        <td>{{date( 'd/m/Y' , strtotime($value->created_at))}}</td>
        <td><a href="{{action('CursoController@edit', $value->id)}}" class="btn btn-warning">Editar</a></td>
        <td><a href="{{action('CursoController@mostrar', $value->id)}}" class="btn btn-success">Detalhes</a></td>
        <td><form action="{{action('CursoController@destroy', $value->id)}}" method="post">
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