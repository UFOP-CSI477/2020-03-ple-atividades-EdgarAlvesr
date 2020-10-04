@extends('principal')

@section('conteudo')

    <a class="btn btn-sm btn-secondary my-2" href="{{route('agendamentos.index')}}">Voltar</a>

    <div class="row justify-content-center my-4">
        <h3>Cadastro de Agendamento</h3>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-6">
            <form action="{{ route('agendamentos.store') }}" method="post">
                
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
                    <label for="coleta_id">Local de Coleta</label>
                    <select name="coleta_id" id="coleta_id" class="form-control">
                    @foreach($coletas as $c)
                        <option value="{{$c->id}}">{{$c->nome}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="data" class="mr-2">Data:</label>
                    <input id="data" name="data" type="date" value="">
                </div>
                
                <div class="text-right">
                    <input type="submit" value="Cadastrar" class="btn btn-primary">
                    <input type="reset" value="Limpar" class="btn btn-danger">
                </div>
            
            </form>
        </div>
    </div>


@endsection