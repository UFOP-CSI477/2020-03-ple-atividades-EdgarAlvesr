@extends('principal')

@section('conteudo')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Agendamento</h1>
</div>


<!-- Card Agendamento -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agendar sala</h6>
    </div>
    
    <div class="card-body">
        <div class="">
            <div class="mb-4">
                <h4>Agendar</h4>
            </div>
            <form action="{{ route('agendamentos.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="sala_id">Sala (Capacidade de pessoas)</label>
                        <select name="sala_id" id="sala_id" class="form-control" onchange="carregarHorarios()">
                            <option value="">Selecione</option>
                            @foreach($salas as $sala)
                            <option value="{{$sala->id}}">{{$sala->numero}} ({{$sala->capacidade}})</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="form-group col-sm-3">
                        <label for="data" class="mr-2">Data</label>
                        <input id="data" name="data" type="date" value="" class="form-control" onchange="carregarHorarios()">
                    </div>

                    <div class="form-group col-sm-2">
                        <label for="horario_inicial">Horário de início</label>
                        <select name="horario_inicial" id="horario_inicial" class="form-control" onchange="carregarHorariosFinais()">
                            <option value=""></option>
                        </select>
                    </div>
    
                    <div class="form-group col-sm-2">
                        <label for="horario_final">Horário final</label>
                        <select name="horario_final" id="horario_final" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
    
                    <div class="form-group col-sm-4">
                        <label for="titulo" class="mr-2">Descrição</label>
                        <input id="titulo" name="titulo" type="text" class="form-control">
                    </div>
    
                    <div class="form-group col-sm-4">
                        <label for="user_id" class="mr-2">Responsável</label>
                        <span class="form-control">{{ Auth::user()->name }}</span>
                        <input type="hidden" id="user_id" name="user_id" type="text" value="{{ Auth::user()->id }}">
                    </div>

                </div>
                
                <div class="text-right">
                    <input type="submit" value="Agendar" class="btn btn-primary">
                    <input type="reset" value="Limpar" class="btn btn-danger">
                </div>

            </form>
        </div>
    </div>
</div>


@endsection


@push('scripts')
    <!-- Datatables -->
    <script src="{{ asset('js/verificaHorarios.js') }}"></script>
@endpush