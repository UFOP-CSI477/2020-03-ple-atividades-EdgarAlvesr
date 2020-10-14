@extends('principal')

@section('conteudo')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detalhes do Agendamento</h1>
</div>


<!-- Card Agendamento -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agendamento {{$agendamento->id}}</h6>
    </div>
    
    <div class="card-body">
        <div class="">
            <div class="mb-4">
                <h4>Detalhes</h4>
            </div>

            <ul>
                <li class="py-1"><strong>ID: </strong>{{ $agendamento->id }}</li>
                <li class="py-1"><strong>Sala: </strong>{{ $agendamento->sala->numero }}</li>
                <li class="py-1"><strong>Descrição: </strong>{{ $agendamento->titulo }}</li>
                <li class="py-1"><strong>Data: </strong>{{ $agendamento->data }}</li>
                <li class="py-1"><strong>Horario de início: </strong>{{ $agendamento->horario_inicial }}</li>
                <li class="py-1"><strong>Horário final: </strong>{{ $agendamento->horario_final }}</li>
                <li class="py-1"><strong>Responsável: </strong>{{ $agendamento->user->name }}</li>
            </ul>

            @if( Auth::check() && (Auth::user()->tipo === 'admin' || Auth::user()->name === $agendamento->user->name) )
            <div class="d-flex my-4">
                <a class="btn btn-warning mr-2" href="{{ route('agendamentos.edit', $agendamento->id) }}">Editar</a>
                
                <form name='frmDelete' action="{{ route('agendamentos.destroy', $agendamento->id) }}" method="post" onsubmit="return confirm('Deseja mesmo excluir o agendamento?')">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Excluir"></input>
                </form>
            </div>
            @endif


        </div>
    </div>
</div>



@endsection