<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\User;
use App\Models\Registro;
use Illuminate\Support\Facades\Auth;

class AreaAdministrativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()){
            return redirect()->route('areaadministrativa.login');
        }

        return view('areaadministrativa.index');
    }

    public function login()
    {
        return view('areaadministrativa.login');
    }
    
    public function rel_usuarios()
    {
        if(!Auth::check()){
            return redirect()->route('areaadministrativa.login');
        }

        $users = User::orderBy('nome')->get();

        return view('areaadministrativa.usuarios', ['users' => $users]);
    }
    
    public function rel_manutencoes()
    {
        if(!Auth::check()){
            return redirect()->route('areaadministrativa.login');
        }

        $equipamentos = Equipamento::orderBy('nome')->get();

        return view('areaadministrativa.manutencoes', ['equipamentos' => $equipamentos]);
    }

}
