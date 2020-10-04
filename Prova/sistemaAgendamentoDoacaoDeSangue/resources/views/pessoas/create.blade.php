@extends('principal')

@section('conteudo')

    <a class="btn btn-sm btn-secondary my-2" href="{{route('areaadministrativa.index')}}">Voltar</a>

    <div class="row justify-content-center my-4">
        <h3>Cadastro de Pessoa</h3>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-6">
            <form action="{{ route('pessoas.store') }}" method="post">
                
                @csrf
                
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>
                
                <div class="form-group">
                    <label for="tipo">Tipo Sanguíneo</label>
                    <select class="form-control" name="tipo" id="tipo">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
                
                <div class="text-right">
                    <input type="submit" value="Cadastrar" class="btn btn-primary">
                    <input type="reset" value="Limpar" class="btn btn-danger">
                </div>
            
            </form>
        </div>
    </div>


@endsection