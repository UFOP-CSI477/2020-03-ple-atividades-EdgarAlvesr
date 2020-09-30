@extends('principal')

@section('conteudo')

    <a class="btn btn-primary my-2" href="{{ route('produtos.create') }}">Cadastrar produto</a>

    <div class="row justify-content-center">
        <div class="col-sm-6 table-responsive">
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Produto</th>
                        <th>Unidade de Medida</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($produtos as $p)
                    <tr>
                        <td> {{$p->id}} </td>
                        <td> {{$p->nome}} </td>
                        <td> {{$p->um}} </td>
                        <td> <a class="btn btn-primary" href="{{ route('produtos.show', $p->id) }}">Exibir</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection