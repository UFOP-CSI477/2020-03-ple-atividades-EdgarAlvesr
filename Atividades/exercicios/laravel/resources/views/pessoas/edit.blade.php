@extends('principal')

@section('conteudo')

<form action="{{ route('pessoas.update', $pessoa->id) }}" method="post">
    
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $pessoa->nome }}">
    </div>
    
    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

</form>



@endsection