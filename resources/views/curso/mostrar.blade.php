@extends('templates.master')
@section('conteudo-view')


<div class="container">

<h2>{{$curso->nome}}</h2>

    <br>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ action('CursoController@index') }}"> Voltar</a>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>logradouro</th>
        <th>No</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Dt. Criação</th>
      </tr>
    </thead>
    <tbody>
      @foreach($alunos as $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->nome}}</td>
        <td>{{$value->data_nascimento}}</td>
        <td>{{$value->logradouro}}</td>
        <td>{{$value->numero}}</td>
        <td>{{$value->bairro}}</td>
        <td>{{$value->cidade}}</td>
        <td>{{$value->estado}}</td>
        <td>{{ date( 'd/m/Y' , strtotime($value->created_at))}}</td>

      </tr>
      @endforeach
    </tbody>
  </table>
  </div>


@endsection