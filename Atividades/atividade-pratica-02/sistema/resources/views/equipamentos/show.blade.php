@extends('principal')

@section('conteudo')

<a class="btn btn-sm btn-secondary my-3" href="{{ route('equipamentos.index') }}">Voltar</a>

<h3>Detalhes do equipamento</h3>

<ul>
    <li class="py-1"><strong>ID: </strong>{{ $equipamento->id }}</li>
    <li class="py-1"><strong>Nome: </strong>{{ $equipamento->nome }}</li>
</ul>

<div class="d-flex">
    <a class="btn btn-warning mr-2" href="{{ route('equipamentos.edit', $equipamento->id) }}">Editar</a>
    
    <form name='frmDelete' action="{{ route('equipamentos.destroy', $equipamento->id) }}" method="post" onsubmit="return confirm('Deseja mesmo excluir o item?')">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Excluir"></input>
    </form>
</div>


@endsection