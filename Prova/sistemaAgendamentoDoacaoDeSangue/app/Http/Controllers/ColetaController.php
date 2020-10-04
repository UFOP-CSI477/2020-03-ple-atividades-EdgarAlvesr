<?php

namespace App\Http\Controllers;

use App\Models\Coleta;
use App\Models\Agendamento;
use Illuminate\Http\Request;

class ColetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coletas = Coleta::orderBy('nome')->get();

        return view('coletas.index', ['coletas' => $coletas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coletas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Coleta::create($request->all());
        session()->flash('msg_success', 'Local de coleta cadastrado com sucesso!');
        
        return redirect()->route('areaadministrativa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function show(Coleta $coleta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Coleta $coleta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coleta $coleta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coleta $coleta)
    {
        //
    }
}
