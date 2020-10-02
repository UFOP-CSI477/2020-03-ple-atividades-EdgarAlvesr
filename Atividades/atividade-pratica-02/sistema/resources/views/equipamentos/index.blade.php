@extends('principal')

@section('conteudo')

    <a class="btn btn-primary my-2" href="{{ route('equipamentos.create') }}">Cadastrar equipamento</a>

    <div class="row justify-content-center">
        <div class="col-sm-6 table-responsive text-center">
            <h5>Lista de equipamentos</h5>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Equipamento</th>
                        <th>Exibir</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($equipamentos as $e)
                    <tr>
                        <td> {{$e->id}} </td>
                        <td> {{$e->nome}} </td>
                        <td> <a class="btn btn-primary" href="{{ route('equipamentos.show', $e->id) }}">Exibir</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection