@extends('principal')

@section('conteudo')

<a class="btn btn-sm btn-secondary my-2" href="{{ route('agendamentos.index') }}">Voltar</a>

<h3 class="my-4">Detalhes do Agendamento</h3>

<ul>
    <li class="py-1"><strong>ID: </strong>{{ $agendamento->id }}</li>
    <li class="py-1"><strong>Pessoa: </strong>{{ $agendamento->pessoa->nome }}</li>
    <li class="py-1"><strong>Local de coleta: </strong>{{ $agendamento->coleta->nome }}</li>
    <li class="py-1"><strong>Data: </strong>{{ $agendamento->data }}</li>
    <li class="py-1"><strong>Tipo Sanguíneo: </strong>{{ $agendamento->pessoa->tipo }}</li>
</ul>

<div class="d-flex my-4">
    <a class="btn btn-warning mr-2" href="{{ route('agendamentos.edit', $agendamento->id) }}">Editar</a>
    
    <form name='frmDelete' action="{{ route('agendamentos.destroy', $agendamento->id) }}" method="post" onsubmit="return confirm('Deseja mesmo excluir o agendamento?')">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Excluir"></input>
    </form>
</div>


@endsection