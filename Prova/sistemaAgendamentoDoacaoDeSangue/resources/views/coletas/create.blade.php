@extends('principal')

@section('conteudo')

    <a class="btn btn-sm btn-secondary my-2" href="{{route('areaadministrativa.index')}}">Voltar</a>

    <div class="row justify-content-center my-4">
        <h3>Cadastro de Local de Coleta</h3>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-6">
            <form action="{{ route('coletas.store') }}" method="post">
                
                @csrf
                
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>
                
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade">
                </div>
                
                <div class="text-right">
                    <input type="submit" value="Cadastrar" class="btn btn-primary">
                    <input type="reset" value="Limpar" class="btn btn-danger">
                </div>
            
            </form>
        </div>
    </div>


@endsection