<?php

use App\Http\Controllers\AreaAdministrativaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AreaGeralController;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/users', UserController::class)->middleware('auth');
Route::resource('/registros', RegistroController::class)->middleware('auth');
Route::resource('/equipamentos', EquipamentoController::class)->middleware('auth');

Route::get('/areageral', [AreaGeralController::class, 'index'])->name('areageral.index');
Route::get('/areageral/equipamentos', [AreaGeralController::class, 'equipamentos'])->name('areageral.equipamentos');
Route::get('/areageral/manutencoes', [AreaGeralController::class, 'manutencoes'])->name('areageral.manutencoes');

Route::get('/areaadministrativa', [AreaAdministrativaController::class, 'index'])->name('areaadministrativa.index');
Route::get('/areaadministrativa/login', [AreaAdministrativaController::class, 'login'])->name('areaadministrativa.login');
Route::get('/areaadministrativa/rel_usuarios', [AreaAdministrativaController::class, 'rel_usuarios'])->name('areaadministrativa.rel_usuarios');
Route::get('/areaadministrativa/rel_manutencoes', [AreaAdministrativaController::class, 'rel_manutencoes'])->name('areaadministrativa.rel_manutencoes');

// Route::view('/areageral', 'areageral.index');
// Route::view('/areageral/equipamentos', 'areageral.equipamentos');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
