<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Produto;
use App\Models\Compra;

class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pessoas = Pessoa::orderBy('nome')->get();
        // $compras_data = Compra::orderBy('data')->get();
        // $produtos = Produto::orderBy('nome')->get();

        // foreach($pessoas as $p){
        //     $compras_por_pessoa['pessoa'] = $p->nome;
        //     $compras_por_pessoa['qtd'] = $p->compras->count();
        // }

        // foreach($produtos as $p){
        //     $compras_por_produto['produto'] = $p->nome;
        //     $compras_por_produto['qtd'] = $p->compras->count();
        // }

        // return view('relatorios.index', 
        //     ['compras_por_pessoa' => $compras_por_pessoa,
        //      'compras_data' => $compras_data,
        //      'compras_por_produto' => $compras_por_produto
        //     ]);
    }

}
