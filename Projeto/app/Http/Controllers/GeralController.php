<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeralController extends Controller
{
    public function login()
    {
        return view('geral.login');
    }
    
    //Iniciais
    public function ajaxHorariosIniciais(Request $request)
    {
        $agendamentos = Agendamento::select('horario_inicial', 'horario_final')
            ->where('sala_id', '=', $request->sala_id)
            ->where('data', '=', $request->data)
            ->orderBy('horario_inicial')->get();
        
        $horarios_iniciais = [];

        for ($i=7; $i <= 22; $i++) { 
            $horarios_iniciais[] = $i.':00';
            $horarios_iniciais[] = $i.':30';
        }

        foreach ($agendamentos as $agendamento) {
            $key_ini = array_search($agendamento->horario_inicial, $horarios_iniciais);
            
            if($key_ini !== false){
                $key_fim = array_search($agendamento->horario_final, $horarios_iniciais);
                array_splice($horarios_iniciais, $key_ini, $key_fim);
            }
        }


        // return response()->json($agendamentos);
        
        return ($horarios_iniciais);
    }

}
