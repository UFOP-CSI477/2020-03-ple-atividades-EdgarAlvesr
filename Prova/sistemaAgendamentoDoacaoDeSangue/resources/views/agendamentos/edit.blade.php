@extends('principal')

@section('conteudo')


<div class="row justify-content-center my-4">
    <h3>Editar Agendamento</h3>
</div>

<div class="row justify-content-center">
    <div class="col-sm-6">
        <form action="{{ route('agendamentos.update', $agendamento->id) }}" method="post">
            
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="pessoa_id">Pessoa</label>
                <select name="pessoa_id" id="pessoa_id" class="form-control">
                @foreach($pessoas as $p)
                    
                    <option value="{{$p->id}}"
                        @if($p->id == $agendamento->pessoa_id)
                            selected
                        @endif    
                    >{{$p->nome}}</option>

                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="coleta_id">Local de Coleta</label>
                <select name="coleta_id" id="coleta_id" class="form-control">
                @foreach($coletas as $c)
                    <option value="{{$c->id}}"
                    
                        @if($c->id == $agendamento->coleta_id)
                            selected
                        @endif  
                    
                    >{{$c->nome}}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="data" class="mr-2">Data:</label>
                <input id="data" name="data" type="date" value="{{$agendamento->data}}">
            </div>

            <div class="text-right">
                <input type="submit" value="Atualizar" class="btn btn-primary">
                <input type="reset" value="Limpar" class="btn btn-danger">
            </div>
        
        </form>
    </div>
</div>






@endsection