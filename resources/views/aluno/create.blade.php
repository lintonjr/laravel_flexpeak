<!-- create.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <h2>Cadastrar Aluno</h2>
  @if($errors->any())

    <ul class="list-group"></ul>

    @foreach($errors->all() as $error)

      <li class="list-group-item list-group-item-warning">{{ $error }}</li>

    @endforeach

  @endif
    <form method="post" action="{{action('AlunoController@store')}}">
      <div class="form-row">
      {{csrf_field()}}
        <div class="form-group col-md-12">
          <label for="lgFormGroupInput">Nome</label>
          <input type="text" class="form-control" id="lgFormGroupInput" placeholder="Nome" name="nome">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="lgFormGroupInput">Curso</label>
          <select class="form-control" name="curso">
            @foreach($cursos as $curso)
              <option value="{{$curso->id}}">{{$curso->nome}}</option>
            @endforeach
          </select>
        </div>
      </div>
   
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="lgFormGroupInput">Data de Nascimento</label>
        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="Data de Nascimento" name="data_nascimento">
      </div>
      <div class="form-group col-md-6">
        <label for="lgFormGroupInput">CEP</label>
        <input type="text" class="form-control" id="cep" placeholder="CEP" value="" name="cep" onblur="pesquisacep(this.value);">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="lgFormGroupInput">Logradouro</label>
        <input type="text" class="form-control" id="logradouro" placeholder="Logradouro" name="logradouro">
      </div>
      <div class="form-group col-md-6">
        <label for="lgFormGroupInput">Número</label>
        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="Número" name="numero">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="lgFormGroupInput">Bairro</label>
        <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="lgFormGroupInput">Cidade</label>
        <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade">
      </div>
      <div class="form-group col-md-6">
        <label for="lgFormGroupInput">Estado</label>
        <input type="text" class="form-control" id="uf" placeholder="Estado" name="estado">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-5"></div>
        <input type="submit" class="btn btn-primary">
        <a class="btn btn-danger" href="{{ action('AlunoController@index') }}"> Cancelar</a>
    </div>
  </form>
</div>
@endsection