<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Pessoa;
use App\Models\Coleta;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
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

        return view('agendamentos.index', ['agendamentos' => $agendamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoas = Pessoa::orderBy('nome')->get();
        $coletas = Coleta::orderBy('nome')->get();
        
        return view('agendamentos.create', ['pessoas' => $pessoas, 'coletas' => $coletas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Agendamento::create($request->all());
        session()->flash('msg_success', 'Agendamento cadastrado com sucesso!');
        
        return redirect()->route('agendamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function show(Agendamento $agendamento)
    {
        return view('agendamentos.show', ['agendamento' => $agendamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendamento $agendamento)
    {
        $pessoas = Pessoa::orderBy('nome')->get();
        $coletas = Coleta::orderBy('nome')->get();
        
        return view('agendamentos.edit', ['agendamento' => $agendamento, 'pessoas' => $pessoas, 'coletas' => $coletas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        $agendamento->fill($request->all());
        $agendamento->save();

        session()->flash('msg_success', "Agendamento atualizado com sucesso!");
        return redirect()->route('agendamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento $agendamento)
    {
        $agendamento->delete();
        session()->flash('msg_success', 'Agendamento excluído com sucesso!');

        return redirect()->route('agendamentos.index');
    }
}
