<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Pessoa;
use App\Models\Produto;
use App\Models\Compra;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\RelatorioController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/produtos', ProdutoController::class);
Route::resource('/pessoas', PessoaController::class);
Route::resource('/compras', CompraController::class);
Route::resource('/relatorios', RelatorioController::class);


Route::get('/relatorios', function(){

    $pessoas = Pessoa::orderBy('nome')->get();
    $compras_data = Compra::orderBy('data')->get();
    $produtos = Produto::orderBy('nome')->get();

    foreach($pessoas as $p){
        $compras_por_pessoa[] = array('pessoa' => $p->nome, 'qtd' => $p->compras->count());
        
        // $compras_por_pessoa[]['pessoa'] = $p->nome;
        // $compras_por_pessoa[]['qtd'] = $p->compras->count();
    }

    foreach($produtos as $p){
        $compras_por_produto[] = array('produto' => $p->nome, 'qtd' => $p->compras->count());
    }

    return view('relatorios.index', 
        ['compras_por_pessoa' => $compras_por_pessoa,
         'compras_data' => $compras_data,
         'compras_por_produto' => $compras_por_produto
        ]);
});


// Route::get('/produtos/todos', function(){

//     $produtos = Produto::all();

//     return view('lista', ['dados' => $produtos]); 
// });

// Route::get('/produtos/{id}', function($id) {

//     $produto[] = Produto::findOrFail($id);
//     //findOrFail retorna erro 404 se não encontrar e para a execução
//     //produto[] tem que ser array para não dar erro no @foreach da view 'lista'

//     return view('lista', ['dados' => $produto]);
// });
