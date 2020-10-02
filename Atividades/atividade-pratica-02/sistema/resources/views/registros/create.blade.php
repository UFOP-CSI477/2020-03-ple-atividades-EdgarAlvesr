@extends('principal')

@section('conteudo')

<div class="row justify-content-center my-4">
    <h3>Cadastro</h3>
</div>

<div class="row justify-content-center">
    <div class="col-sm-6">
        <form action="{{ route('registros.store') }}" method="post">
            
            @csrf
            
            <div class="form-group">
                <label for="equipamento_id">Equipamento</label>
                <select name="equipamento_id" id="equipamento_id" class="form-control">
                @foreach($equipamentos as $e)
                    <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="user_id">Usuário</label>
                <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $u)
                    <option value="{{$u->id}}">{{$u->name}}</option>
                @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select name="tipo" id="tipo" class="form-control">
                    <option value="1">Preventiva</option>
                    <option value="2">Corretiva</option>
                    <option value="3">Urgente</option>
                </select>
            </div>

            <div class="form-group">
                <label for="datalimite" class="mr-2">Data:</label>
                <input id="datalimite" name="datalimite" type="date">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao"></textarea>
            </div>
            
            <div class="text-right">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
                <input type="reset" value="Limpar" class="btn btn-danger">
            </div>
        
        </form>
    </div>
</div>


@endsection