<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Pessoa;

class AreaGeralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendamentos = Agendamento::orderBy('data', 'desc')->orderBy(
            Pessoa::select('nome')
                ->whereColumn('id', 'agendamentos.pessoa_id')
                ->orderBy('nome')
            )->get();
        
        return view('areageral.index', ['agendamentos' => $agendamentos]);
    }
    
}
