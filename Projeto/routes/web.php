<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\GeralController;

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

Route::get('/principal', function () {
    return view('principal');
})->name('principal');

Route::get('/', function () {
    return view('splashScreen');
})->name('splashScreen');

// Route::get('/agendamentos', function () {
//     return view('agendamentos.index');
// })->name('agendamentos.index');


//Autorização feita no controller para determinados métodos
Route::resource('/agendamentos', AgendamentoController::class);

Route::get('/geral/login', [GeralController::class, 'login'])->name('geral.login');

Route::get('/ajax/horariosIniciais', [GeralController::class, 'ajaxHorariosIniciais'])->name('geral.ajaxHorariosIniciais');
Route::get('/ajax/horariosFinais', [GeralController::class, 'ajaxHorariosFinais'])->name('geral.ajaxHorariosFinais');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
