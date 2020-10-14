@extends('principal')

@push('styles')
    <!-- Datatables -->
    <link href="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush


@section('conteudo')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Reservas</h1>
</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Lista de salas reservadas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sala</th>
                        <th>Titulo</th>
                        <th>Data</th>
                        <th>Horario Inicial</th>
                        <th>Horario Final</th>
                        <th>Responsável</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sala</th>
                        <th>Titulo</th>
                        <th>Data</th>
                        <th>Horario Inicial</th>
                        <th>Horario Final</th>
                        <th>Responsável</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($agendamentos as $item)
                    <tr>
                        <td>{{ $item->sala->numero }}</td>
                        <td>{{ $item->titulo }}</td>
                        <td>{{ $item->data }}</td>
                        <td>{{ $item->horario_inicial }}</td>
                        <td>{{ $item->horario_final }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td><a class="btn btn-primary" href="{{ route('agendamentos.show', $item->id) }}">Visualizar/Editar</a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection


@push('scripts')
    <!-- Datatables -->
    <script src="{{ asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Datatables custom -->
    <script src="{{ asset('js/tabelaAgendamentos.js') }}"></script>
@endpush