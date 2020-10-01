<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Pessoa;
use App\Models\Produto;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::orderBy('id')->get();
        
        return view('compras.index', ['compras' => $compras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //method = 'post'. Action = "store()"
    {
        //Cria formulário somente. Redireciona para store fazer a persistência dos dados
        return view('compras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // OPÇÃO DE SINTAXE
        // $estado = new Estado;
        // $estado->nome = $request->nome;
        // $estado->sigla = $request->sigla;
        // $estado->save();
        
        // dd($request);

        Compra::create($request->all());
        session()->flash('mensagem', 'Compra cadastrada com sucesso!');
        return redirect()->route('compras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        return view('compras.show', ['compra' => $compra]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
        $pessoas = Pessoa::orderBy('nome')->get();
        $produtos = Produto::orderBy('nome')->get();
        return view('compras.edit',
            ['compra' => $compra,
            'pessoas' => $pessoas,
            'produtos' => $produtos]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        // dump($request->all());
        // dd($compra);

        $compra->fill($request->all());
        $compra->save();

        session()->flash('mensagem', "Compra atualizada com sucesso");
        return redirect()->route('compras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        // dd($compra);

        $compra->delete($compra);
        session()->flash('mensagem', 'Compra excluída!');
        return redirect()->route('compras.index');
    }
}
