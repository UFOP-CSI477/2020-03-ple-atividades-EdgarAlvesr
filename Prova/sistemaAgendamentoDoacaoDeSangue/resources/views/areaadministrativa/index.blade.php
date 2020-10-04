@extends('principal')

@section('conteudo')

<style>
    .btn-padrao{
        width: 250px;
    }
</style>

<div class="row justify-content-center my-4">
    <h2>Administrativo</h2>
</div>
<div class="text-center py-3">
    <h6>Selecione a área que deseja acessar:</h6>
</div>
<div class="row justify-content-center">
    <div class="col-sm-6 justify-content-center">
        <div class="d-flex justify-content-around my-3">
            <a class="btn btn-primary btn-padrao" href="{{route('pessoas.index')}}" role="button">Lista de Pessoas</a>
            <a class="btn btn-primary btn-padrao" href="{{route('pessoas.create')}}" role="button">Cadastro de Pessoas</a>
        </div>
        <div class="d-flex justify-content-around my-3">
            <a class="btn btn-secondary btn-padrao" href="{{route('coletas.index')}}" role="button">Lista de Locais de Coleta</a>
            <a class="btn btn-secondary btn-padrao" href="{{route('coletas.create')}}" role="button">Cadastro de Locais de Coleta</a>
        </div>
        <div class="d-flex justify-content-around my-3">
            <a class="btn btn-outline-primary btn-padrao" href="{{route('agendamentos.index')}}" role="button">Agendamentos</a>
        </div>
    </div>
</div>

@endsection