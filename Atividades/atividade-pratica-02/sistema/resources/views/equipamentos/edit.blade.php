@extends('principal')

@section('conteudo')


<div class="row justify-content-center my-4">
    <h3>Edição</h3>
</div>

<div class="row justify-content-center">
    <div class="col-sm-6">
        <form action="{{ route('equipamentos.update', $equipamento->id) }}" method="post">
            
            @csrf
            @method('PUT')
            
            <div class="form-group mt-3">
                <p><strong>ID: {{$equipamento->id}}</strong></p>
            </div>
            
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{ $equipamento->nome }}">
            </div>
            
            <div class="text-right">
                <input type="submit" value="Atualizar" class="btn btn-primary">
                <input type="reset" value="Limpar" class="btn btn-danger">
            </div>
        
        </form>
    </div>
</div>






@endsection