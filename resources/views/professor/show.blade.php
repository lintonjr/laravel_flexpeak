@extends('templates.master')
@section('conteudo-view')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Detalhes Professor </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ action('ProfessorController@index') }}"> Voltar</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{$professor->id}}
            </div>
            <div class="form-group">
                <strong>Nome:</strong>
                {{$professor->nome}}
            </div>
            <div class="form-group">
                <strong>Data de Nascimento:</strong>
                {{$professor->data_nascimento}}
            </div>
            <div class="form-group">
                <strong>Data de Criação:</strong>
                {{ date( 'd/m/Y' , strtotime($professor->created_at))}}
            </div>
        </div>
    </div>
@endsection