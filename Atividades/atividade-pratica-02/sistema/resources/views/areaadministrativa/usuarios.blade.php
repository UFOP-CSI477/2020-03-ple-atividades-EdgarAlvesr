@extends('principal')

@section('conteudo')

<a class="btn btn-sm btn-secondary my-3" href="{{ route('areaadministrativa.index') }}">Voltar</a>

    <div class="row justify-content-center">
        <div class="col-sm-6 table-responsive text-center">
            <h5>Lista de usuários</h5>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $u)
                    <tr>
                        <td> {{$u->id}} </td>
                        <td> {{$u->name}} </td>
                        <td> {{$u->email}} </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection