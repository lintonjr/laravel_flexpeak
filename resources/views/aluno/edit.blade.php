<!-- edit.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <h2>Editar Aluno</h2>
  @if($errors->any())

  <ul class="list-group"></ul>

    @foreach($errors->all() as $error)

      <li class="list-group-item list-group-item-warning">{{ $error }}</li>

    @endforeach

  @endif
  <form method="post" action="{{action('AlunoController@update', $alunos->id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nome</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Nome" name="nome" value="{{$alunos->nome}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Curso</label>
      <div class="col-sm-10">
      <select class="form-control" name="professor">
        @foreach($cursos as $curso)
          <option @if($curso->id == $alunos->curso->id) selected @endif value="{{$curso->id}}">{{$curso->nome}}</option>
        @endforeach
      </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Data de Nascimento</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Data de Nascimento" name="data_nascimento" value="{{$alunos->data_nascimento}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">CEP</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="CEP" name="cep" value="{{$alunos->cep}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Logradouro</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Logradouro" name="logradouro" value="{{$alunos->logradouro}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Número</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Número" name="numero" value="{{$alunos->numero}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Bairro</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Bairro" name="bairro" value="{{$alunos->bairro}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Cidade</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Cidade" name="cidade" value="{{$alunos->cidade}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Estado</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Estado" name="estado" value="{{$alunos->estado}}">
      </div>
    </div>
    
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Editar</button>
      <a class="btn btn-danger" href="{{ action('AlunoController@index') }}"> Cancelar</a>
    </div>
  </form>
</div>
@endsection