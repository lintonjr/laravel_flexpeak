@extends('templates.master')
@section('conteudo-view')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Detalhes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ action('AlunoController@index') }}"> Voltar</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $alunos->id}}
            </div>
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $alunos->nome}}
            </div>
            <div class="form-group">
                <strong>Data de Nascimento:</strong>
                {{ $alunos->data_nascimento}}
            </div>
            <div class="form-group">
                <strong>CEP:</strong>
                {{ $alunos->cep}}
            </div>
            <div class="form-group">
                <strong>Logradouro:</strong>
                {{ $alunos->logradouro}}
            </div>
            <div class="form-group">
                <strong>Número:</strong>
                {{ $alunos->numero}}
            </div>
            <div class="form-group">
                <strong>Bairro:</strong>
                {{ $alunos->bairro}}
            </div>
            <div class="form-group">
                <strong>Cidade:</strong>
                {{ $alunos->cidade}}
            </div>
            <div class="form-group">
                <strong>Estado:</strong>
                {{ $alunos->estado}}
            </div>
            <div class="form-group">
                <strong>Data de Criação:</strong>
                {{ date( 'd/m/Y' , strtotime($alunos->created_at))}}
            </div>
        </div>
    </div>
@endsection