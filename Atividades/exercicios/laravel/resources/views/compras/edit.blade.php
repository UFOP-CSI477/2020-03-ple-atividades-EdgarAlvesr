@extends('principal')

@section('conteudo')

<form action="{{ route('compras.update', $compra->id) }}" method="post">
    
    @csrf
    @method('PUT')
    
    <div class="form-group mt-3">
        <h5><strong>ID: {{$compra->id}}</strong></h5>
    </div>
    
    <div class="form-group">
        <label for="pessoa_id">Pessoa</label>

        <select name="pessoa_id" id="pessoa_id" class="form-control">
        
        @foreach($pessoas as $p)
            <option value="{{$p->id}}"
                @if($compra->pessoa_id == $p->id)
                    selected
                @endif
            >{{$p->nome}}</option>
        @endforeach

        </select>
    </div>

    <div class="form-group">
        <label for="produto_id">Produto</label>

        <select name="produto_id" id="produto_id" class="form-control">
        
        @foreach($produtos as $p)
            <option value="{{$p->id}}"
                @if($compra->produto_id == $p->id)
                    selected
                @endif
            >{{$p->nome}}</option>
        @endforeach

        </select>
    </div>
    
    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

</form>

@endsection