@extends('principal')

@section('conteudo')

    <a href="{{ route('pessoas.create') }}">Cadastrar</a>

    <div class="row justify-content-center">
        <div class="col-sm-6 table-responsive">
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Exibir</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pessoas as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->nome }}</td>
                        <td><a href="{{ route('pessoas.show', $p->id) }}">Exibir</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection