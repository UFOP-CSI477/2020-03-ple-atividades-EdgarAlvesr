@extends('principal')

@section('conteudo')

<a class="btn btn-sm btn-secondary my-3" href="{{ route('areaadministrativa.index') }}">Voltar</a>

    <div class="row justify-content-center">
        <div class="col-sm-12 table-responsive text-center">
            <h5>Lista de manutenções por equipamento</h5>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Equipamento</th>
                        <th style="width: 8%">Quantidade de manutenções</th>
                        <th>Manutenções</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($equipamentos as $e)
                    <tr>
                        <td> {{$e->id}} </td>
                        <td> {{$e->nome}} </td>
                        <td> {{$e->registros->count()}} </td>
                        <td>
                        @foreach($e->registros as $registro)
                            <li>{{$registro->descricao}}</li>
                        @endforeach
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection