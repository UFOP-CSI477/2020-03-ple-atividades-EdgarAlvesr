@extends('principal')

@section('conteudo')

    <div class="row justify-content-center mt-2">
        <div class="col-sm-6 table-responsive text-center">
            <h5>Compras por pessoa</h5>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Pessoa</th>
                        <th>Quantidade de Compras</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($compras_por_pessoa as $item)
                    <tr>
                        <td>{{ $item['pessoa'] }}</td>
                        <td>{{ $item['qtd'] }}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <div class="row justify-content-center mt-2">
        <div class="col-sm-6 table-responsive text-center">
            <h5>Compras por Produto</h5>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade de Compras</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($compras_por_produto as $item)
                    <tr>
                        <td>{{ $item['produto'] }}</td>
                        <td>{{ $item['qtd'] }}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <div class="row justify-content-center mt-2">
        <div class="col-sm-6 table-responsive text-center">
            <h5>Compras por Data</h5>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Pessoa</th>
                        <th>Produto</th>
                        <th>Data</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($compras_data as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->pessoa->nome }}</td>
                        <td>{{ $c->produto->nome }}</td>
                        <td>{{ $c->data }}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection