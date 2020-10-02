@extends('principal')

@section('conteudo')

<div class="row justify-content-center my-4">
    <h3>Cadastro</h3>
</div>

<div class="row justify-content-center">
    <div class="col-sm-6">
        <form action="{{ route('equipamentos.store') }}" method="post">
            
            @csrf
            
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            
            <div class="text-right">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
                <input type="reset" value="Limpar" class="btn btn-danger">
            </div>
        
        </form>
    </div>
</div>


@endsection