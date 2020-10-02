@extends('principal')

@section('conteudo')

<a class="btn btn-sm btn-secondary my-3" href="{{ route('registros.index') }}">Voltar</a>

<h3>Detalhes da manutenção</h3>

<ul>
    <li class="py-1"><strong>ID: </strong>{{ $registro->id }}</li>
    <li class="py-1"><strong>Equipamento (id): </strong>{{ $registro->equipamento->nome }} ({{ $registro->equipamento_id }})</li>
    <li class="py-1"><strong>Usuário: </strong>{{ $registro->user->name }}</li>
    <li class="py-1"><strong>Data Limite: </strong>{{ $registro->datalimite }}</li>
    <li class="py-1"><strong>Tipo: </strong>
    @if ($registro->tipo == 1)
        Preventiva
    @elseif ($registro->tipo == 2)
        Corretiva
    @elseif ($registro->tipo == 3)
        Urgente
    @else
        N/A
    @endif
    </li>
    <li class="py-1"><strong>Descrição: </strong>{{ $registro->descricao }}</li>
</ul>

<div class="d-flex">
    <a class="btn btn-warning mr-2" href="{{ route('registros.edit', $registro->id) }}">Editar</a>
    
    <form name='frmDelete' action="{{ route('registros.destroy', $registro->id) }}" method="post" onsubmit="return confirm('Deseja mesmo excluir o item?')">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Excluir"></input>
    </form>
</div>


@endsection