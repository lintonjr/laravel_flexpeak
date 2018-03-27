<!-- create.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <h2>Cadastrar Curso</h2>
  @if($errors->any())

  <ul class="list-group"></ul>

    @foreach($errors->all() as $error)

      <li class="list-group-item list-group-item-warning">{{ $error }}</li>

    @endforeach

  @endif
  <form method="post" action="{{action('CursoController@store')}}">
    
    <div class="form-row">
      {{csrf_field()}}
      <div class="form-group col-md-12">
        <label for="lgFormGroupInput">Nome</label>
        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="Nome do Curso" name="nome">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="lgFormGroupInput">Professor</label>
        <select class="form-control" name="professor">
        @foreach($professores as $professor)
          <option value="{{$professor->id}}">{{$professor->nome}}</option>
        @endforeach
      </select>
      </div>
    </div>
    
    <div class="form-row">
      <div class="col-md-5"></div>
      <input type="submit" class="btn btn-primary">
      <a class="btn btn-danger" href="{{ action('CursoController@index') }}"> Cancelar</a>
    
    </div>


  </form>
</div>
@endsection