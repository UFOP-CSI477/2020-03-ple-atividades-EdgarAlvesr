@extends('principal')

@section('conteudo')

    <a class="btn btn-sm btn-secondary my-2" href="{{route('areaadministrativa.index')}}">Voltar</a>

    <div class="row justify-content-center my-4">
        <div class="col-sm-10 table-responsive text-center">
            <h5>Lista de Locais de Coleta cadastrados</h5>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th style="width: 8%">Quantidade de Agendamentos</th>
                        <th>Datas dos Agendamentos</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($coletas as $c)
                    <tr>
                        <td> {{$c->id}} </td>
                        <td> {{$c->nome}} </td>
                        <td> {{$c->cidade}} </td>
                        <td> {{$c->agendamentos->count()}} </td>
                        <td>
                        @foreach($c->agendamentos->sortByDesc('data') as $agendamento)
                            <li>{{$agendamento->data}}</li>
                        @endforeach
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection