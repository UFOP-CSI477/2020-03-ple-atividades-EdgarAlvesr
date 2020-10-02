@extends('principal')

@section('conteudo')

    <a class="btn btn-secondary my-2" href="/areageral">Voltar</a>

    <div class="row justify-content-center">
        <div class="col-sm-12 table-responsive text-center">
            <h5>Lista de Manutenções</h5>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th style="width: 10%" >Data Limite</th>
                        <th>Equipamento</th>
                        <th>Usuário</th>
                        <th>Tipo da manutenção</th>
                        <th>Descrição da manutenção</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($manutencoes as $m)
                    <tr>
                        <td> {{$m->datalimite}} </td>
                        <td> {{$m->equipamento->nome}} </td>
                        <td> {{$m->user->name}} </td>
                        
                        <td>
                        @if ($m->tipo == 1)
                            Preventiva
                        @elseif ($m->tipo == 2)
                            Corretiva
                        @elseif ($m->tipo == 3)
                            Urgente
                        @else
                            N/A
                        @endif
                        </td>

                        <td> {{$m->descricao}} </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection