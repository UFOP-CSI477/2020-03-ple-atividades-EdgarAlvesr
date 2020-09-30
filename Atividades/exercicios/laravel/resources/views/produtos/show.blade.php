@extends('principal')

@section('conteudo')

<a class="btn btn-primary my-2" href="{{ route('produtos.index') }}">Voltar</a>

<h1>Detalhes do produto</h1>

<p>ID: {{ $produto->id }}</p>
<p>nome: {{ $produto->nome }}</p>
<p>Unidade de medida: {{ $produto->um }}</p>

<div class="d-flex">
    <a class="btn btn-warning mr-2" href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
    
    <form name='frmDelete' action="{{ route('produtos.destroy', $produto->id) }}" method="post" onsubmit="return confirm('Deseja mesmo excluir o item?')">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Excluir"></input>
    </form>
</div>


@endsection