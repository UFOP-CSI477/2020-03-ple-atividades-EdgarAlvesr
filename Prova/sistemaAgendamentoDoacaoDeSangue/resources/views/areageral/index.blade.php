@extends('principal')

@section('conteudo')


<div class="row justify-content-center my-4">
    <h2>Área Geral</h2>
</div>

<div class="row justify-content-center my-4">
    <div class="col-sm-10 table-responsive text-center">
        <h5>Lista de Agendamentos</h5>
        <table class="table table-bordered table-hover table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Data</th>
                    <th>Local de Coleta</th>
                    <th>Cidade</th>
                    <th>ID do agendamento</th>
                    <th>Pessoa</th>
                    <th>Tipo Sanguíneo</th>
                </tr>
            </thead>

            <tbody>
                @foreach($agendamentos as $a)
                <tr>
                    <td> {{$a->data}} </td>
                    <td> {{$a->coleta->nome}} </td>
                    <td> {{$a->coleta->cidade}} </td>
                    <td> {{$a->id}} </td>
                    <td> {{$a->pessoa->nome}} </td>
                    <td> {{$a->pessoa->tipo}} </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>


@endsection