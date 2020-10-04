@extends('principal')

@section('conteudo')

<style>
    .btn-padrao{
        width: 200px;
    }
</style>

<div class="row justify-content-center my-4">
    <div class="alert alert-warning">
        Você não está logado. O que deseja fazer?
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-sm-6 d-flex justify-content-around">
        <a class="btn btn-primary btn-padrao" href="{{route('login')}}" role="button">Login</a>
        <a class="btn btn-secondary btn-padrao" href="{{route('register')}}" role="button">Registrar</a>
    </div>
</div>

@endsection