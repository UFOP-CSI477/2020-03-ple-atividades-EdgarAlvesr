@extends('principal')

@section('conteudo')

    <a class="btn btn-primary my-2" href="{{ route('registros.create') }}">Cadastrar manutenção</a>

    <div class="row justify-content-center">
        <div class="col-12 table-responsive text-center">
            <h5>Lista de manutenções</h5>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Equipamento (id)</th>
                        <th>Usuário</th>
                        <th style="width: 10%;">Data limite</th>
                        <th>Tipo</th>
                        <th>Descrição</th>
                        <th>Exibir</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($registros as $r)
                    <tr>
                        <td> {{$r->id}} </td>
                        <td> {{$r->equipamento->nome}} ({{$r->equipamento_id}})</td>
                        <td> {{$r->user->name}} </td>
                        <td> {{$r->datalimite}} </td>
                        <td>
                        @if ($r->tipo == 1)
                            Preventiva
                        @elseif ($r->tipo == 2)
                            Corretiva
                        @elseif ($r->tipo == 3)
                            Urgente
                        @else
                            N/A
                        @endif
                        </td>
                        <td> {{$r->descricao}} </td>
                        <td> <a class="btn btn-primary" href="{{ route('registros.show', $r->id) }}">Exibir</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection