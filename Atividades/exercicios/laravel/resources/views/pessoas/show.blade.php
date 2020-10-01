@extends('principal')

@section('conteudo')

<a class="btn btn-primary my-2" href="{{ route('pessoas.index') }}">Voltar</a>

<h1>Detalhes da Pessoa</h1>

<p>ID: {{ $pessoa->id }}</p>
<p>Nome: {{ $pessoa->nome }}</p>


<div class="d-flex">
    <a class="btn btn-warning mr-2" href="{{ route('pessoas.edit', $pessoa->id) }}">Editar</a>
    
    <form name="frmDelete" action="{{ route('pessoas.destroy', $pessoa->id) }}" method="post" onsubmit="return confirm('Confirma a exclusão da pessoa?')">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Excluir">
    </form>
</div>

@endsection