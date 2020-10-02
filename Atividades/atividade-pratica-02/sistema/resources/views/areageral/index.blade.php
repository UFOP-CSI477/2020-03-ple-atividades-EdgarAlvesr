@extends('principal')

@section('conteudo')


<div class="row justify-content-center my-4">
    <h2>Suporte</h2>
</div>
<div class="row justify-content-center">
    <div class="col-sm-6 d-flex justify-content-around">
        <a class="btn btn-primary" href="/areageral/equipamentos" role="button">Lista de equipamentos</a>
        <a class="btn btn-secondary" href="/areageral/manutencoes" role="button">Lista de manutenções cadastradas</a>
    </div>
</div>

@endsection