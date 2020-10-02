<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Registro;

class AreaGeralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('areageral.index');
    }
    
    public function equipamentos()
    {
        $equipamentos = Equipamento::orderBy('nome')->get();

        return view('areageral.equipamentos', ['equipamentos' => $equipamentos]);
    }

    public function manutencoes()
    {
        $manutencoes = Registro::orderBy('datalimite')->get();

        return view('areageral.manutencoes', ['manutencoes' => $manutencoes]);
    }

}
