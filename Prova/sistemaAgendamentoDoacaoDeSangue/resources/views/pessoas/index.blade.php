@extends('principal')

@section('conteudo')

    <a class="btn btn-sm btn-secondary my-2" href="{{route('areaadministrativa.index')}}">Voltar</a>

    <div class="row justify-content-center my-4">
        <div class="col-sm-10 table-responsive text-center">
            <h5>Lista de Pessoas cadastradas</h5>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Tipo Sanguíneo</th>
                        <th style="width: 8%">Quantidade de Agendamentos</th>
                        <th>Locais de Agendamento</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($pessoas as $p)
                    <tr>
                        <td> {{$p->id}} </td>
                        <td> {{$p->nome}} </td>
                        <td> {{$p->tipo}} </td>
                        <td> {{$p->agendamentos->count()}} </td>
                        <td>
                        @foreach($p->agendamentos as $agendamento)
                            <li>{{$agendamento->coleta->nome}}</li>
                        @endforeach
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection