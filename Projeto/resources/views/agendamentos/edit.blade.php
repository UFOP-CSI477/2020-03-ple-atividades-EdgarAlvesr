@extends('principal')

@section('conteudo')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edição</h1>
</div>


<!-- Card Agendamento -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Editar agendamento</h6>
    </div>
    
    <div class="card-body">
        <div class="">
            <form action="{{ route('agendamentos.update', $agendamento->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="sala_id">Sala (Capacidade de pessoas)</label>
                        <select name="sala_id" id="sala_id" class="form-control" onchange="carregarHorarios()">
                        @foreach($salas as $sala)
                            
                            <option value="{{$sala->id}}"
                                @if($sala->id == $agendamento->sala_id)
                                    selected
                                @endif    
                            >{{$sala->numero}} ({{$sala->capacidade}})</option>

                        @endforeach
                        </select>
                    </div>
    
                    <div class="form-group col-sm-3">
                        <label for="data" class="mr-2">Data</label>
                        <input id="data" name="data" type="date" value="{{$agendamento->data}}" class="form-control" onchange="carregarHorarios()">
                    </div>

                    <div class="form-group col-sm-2">
                        <label for="horario_inicial">Horário de início</label>
                        <select name="horario_inicial" id="horario_inicial" class="form-control" onchange="carregarHorariosFinais()">
                            <option value=""></option>
                            <!-- @for ($i = 7; $i <= 22; $i++)
                            <option value="{{$i}}:00" @if( $i.':00' == $agendamento->horario_inicial) selected @endif >{{$i}}:00</option>
                            <option value="{{$i}}:30" @if( $i.':30' == $agendamento->horario_inicial) selected @endif >{{$i}}:30</option>
                            @endfor -->
                        </select>
                    </div>
    
                    <div class="form-group col-sm-2">
                        <label for="horario_final">Horário final</label>
                        <select name="horario_final" id="horario_final" class="form-control">
                            <option value=""></option>
                            <!-- @for ($i = 7; $i <= 22; $i++)
                            <option value="{{$i}}:00" @if( $i.':00' == $agendamento->horario_final) selected @endif >{{$i}}:00</option>
                            <option value="{{$i}}:30" @if( $i.':30' == $agendamento->horario_final) selected @endif >{{$i}}:30</option>
                            @endfor -->
                        </select>
                    </div>
    
                    <div class="form-group col-sm-4">
                        <label for="titulo" class="mr-2">Descrição</label>
                        <input id="titulo" name="titulo" type="text" class="form-control" value="{{ $agendamento->titulo }}">
                    </div>
    
                    <div class="form-group col-sm-4">
                        <label for="user_id" class="mr-2">Responsável</label>
                        
                        @if(Auth::user()->tipo === 'admin')
                        <select name="user_id" id="user_id" class="form-control">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" @if($user->id == $agendamento->user_id) selected @endif >{{ $user->name }}</option>
                        @endforeach    
                        </select>
                        @else
                        <span class="form-control">{{ $agendamento->user->name }}</span>
                        <input type="hidden" id="user_id" name="user_id" type="text" value="{{ $agendamento->user_id }}">
                        @endif
                    </div>

                </div>
                
                <div class="text-right">
                    <input type="submit" value="Atualizar" class="btn btn-primary">
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