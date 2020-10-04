@extends('principal')

@section('conteudo')
    
    <div class="d-flex justify-content-center">
        <a class="btn btn-secondary my-2" href="{{route('areaadministrativa.index')}}">Voltar</a>
        <a class="btn btn-primary my-2 ml-auto mr-auto" href="{{ route('agendamentos.create') }}">Cadastrar agendamento</a>
    </div>

    <div class="row justify-content-center my-4">
        <div class="col-sm-10 table-responsive text-center">
            <h5>Lista de Agendamentos</h5>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Pessoa</th>
                        <th>Local de Coleta</th>
                        <th>Data</th>
                        <th>Exibir</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($agendamentos as $a)
                    <tr>
                        <td> {{$a->id}} </td>
                        <td> {{$a->pessoa->nome}} </td>
                        <td> {{$a->coleta->nome}} </td>
                        <td> {{$a->data}} </td>
                        <td> <a class="btn btn-primary" href="{{ route('agendamentos.show', $a->id) }}">Exibir</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection