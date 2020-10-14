<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Sala;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendamentos = Agendamento::orderBy('data')->orderBy('horario_inicial')->get();

        return view('agendamentos.index', ['agendamentos' => $agendamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()){
            return redirect()->route('geral.login');
        }
        
        $agendamentos = Agendamento::orderBy('data')->orderBy('horario_inicial')->get();
        $salas = Sala::orderBy('numero')->get();

        return view('agendamentos.create', ['agendamentos' => $agendamentos, 'salas' => $salas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::check()){
            return redirect()->route('geral.login');
        }
        
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
        if(!Auth::check() || ( !(Auth::user()->tipo === 'admin') && !(Auth::user()->name === $agendamento->user->name) ) ){
            return redirect()->route('geral.login');
        }

        $salas = Sala::orderBy('numero')->get();
        $users = User::orderBy('name')->get();

        return view('agendamentos.edit', ['agendamento' => $agendamento, 'salas' => $salas, 'users' => $users]);
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
        if(!Auth::check() || ( !(Auth::user()->tipo === 'admin') && !(Auth::user()->name === $agendamento->user->name) ) ){
            return redirect()->route('geral.login');
        }

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
        if(!Auth::check() || ( !(Auth::user()->tipo === 'admin') && !(Auth::user()->name === $agendamento->user->name) ) ){
            return redirect()->route('geral.login');
        }

        $agendamento->delete();
        session()->flash('msg_success', 'Agendamento excluído com sucesso!');
        // session()->flash('msg_fail', 'Você não tem permissão para a ação! Somente administradores ou responsáveis pelo agendamento podem alterá-lo.');

        return redirect()->route('agendamentos.index');
    }
}
