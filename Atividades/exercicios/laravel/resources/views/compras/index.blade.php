@extends('principal')

@section('conteudo')

    <a href="{{ route('compras.create') }}">Cadastrar</a>

    <div class="row justify-content-center">
        <div class="col-sm-6 table-responsive">
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Pessoa</th>
                        <th>Produto</th>
                        <th>Data</th>
                        <th>Exibir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($compras as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->pessoa->nome }}</td>
                            <td>{{ $c->produto->nome }}</td>
                            <td>{{ $c->data }}</td>
                            <td><a href="{{ route('compras.show', $c->id) }}">Exibir</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection