@extends('principal')

@section('conteudo')

<a class="btn btn-primary my-2" href="{{ route('compras.index') }}">Voltar</a>

<h1>Detalhes da Compra</h1>

<p>ID: {{ $compra->id }}</p>
<p>Pessoa: {{ $compra->pessoa->nome }}</p>
<p>Produto: {{ $compra->produto->nome }}</p>
<p>Data: {{ $compra->data }}</p>


<div class="d-flex">
    <a class="btn btn-warning mr-2" href="{{ route('compras.edit', $compra->id) }}">Editar</a>

    <form name="frmDelete" action="{{ route('compras.destroy', $compra->id) }}" method="post" onsubmit="return confirm('Confirma a exclusão da compra?')">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Excluir">
    </form>
</div>

@endsection