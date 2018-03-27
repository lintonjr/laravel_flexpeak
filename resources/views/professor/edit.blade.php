<!-- edit.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <h2>Editar Professor</h2>
  @if($errors->any())

  <ul class="list-group"></ul>

    @foreach($errors->all() as $error)

      <li class="list-group-item list-group-item-warning">{{ $error }}</li>

    @endforeach

  @endif
  <form method="post" action="{{action('ProfessorController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nome</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Nome" name="nome" value="{{$professor->nome}}">
      </div>
    </div>

    <div class="form-group row">
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Data de Nascimento</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Data de Nascimento" name="data_nascimento" value="{{$professor->data_nascimento}}">
      </div>
    </div>
    
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Editar</button>
      <a class="btn btn-danger" href="{{ action('ProfessorController@index') }}"> Cancelar</a>
    </div>
  </form>
</div>
@endsection