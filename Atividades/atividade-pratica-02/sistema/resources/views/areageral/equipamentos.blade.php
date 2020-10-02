@extends('principal')

@section('conteudo')

    <a class="btn btn-secondary my-2" href="/areageral">Voltar</a>

    <div class="row justify-content-center">
        <div class="col-sm-6 table-responsive text-center">
            <h5>Lista de Equipamentos</h5>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Equipamento</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($equipamentos as $e)
                    <tr>
                        <td> {{$e->id}} </td>
                        <td> {{$e->nome}} </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection