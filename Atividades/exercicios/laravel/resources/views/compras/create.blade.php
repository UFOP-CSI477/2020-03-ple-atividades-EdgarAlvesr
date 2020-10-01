@extends('principal')

@section('conteudo')

<form action="{{ route('compras.store') }}" method="post">
    
    @csrf
    
    <div class="form-group">
        <label for="pessoa_id">Pessoa</label>
        
        <select name="pessoa_id" id="pessoa_id" class="form-control">
        
        @foreach($pessoas as $p)
            <option value="{{$p->id}}">{{$p->nome}}</option>
        @endforeach

        </select>
    </div>

    <div class="form-group">
        <label for="produto">Produto</label>
        <input type="text" class="form-control" name="produto" id="produto">
    </div>
    
    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

</form>



@endsection