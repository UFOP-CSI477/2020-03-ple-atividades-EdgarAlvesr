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
            <a class="btn btn-primary btn-padrao" href="{{route('equipamentos.index')}}" role="button">Equipamentos</a>
            <a class="btn btn-primary btn-padrao" href="{{route('registros.index')}}" role="button">Manutenções</a>
        </div>
        <div class="d-flex justify-content-around">
            <a class="btn btn-secondary btn-padrao" href="{{route('areaadministrativa.rel_usuarios')}}" role="button">Relatório de Usuários</a>
            <a class="btn btn-secondary btn-padrao" href="{{route('areaadministrativa.rel_manutencoes')}}" role="button">Relatório de Manutenções</a>
        </div>
    </div>
</div>

@endsection