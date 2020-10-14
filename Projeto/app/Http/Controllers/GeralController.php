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
    
    public function ajaxHorariosIniciais(Request $request)
    {
        $agendamentos = Agendamento::select('horario_inicial', 'horario_final')
            ->where('sala_id', '=', $request->sala_id)
            ->where('data', '=', $request->data)
            ->orderBy('horario_inicial')->get();
        
        $horarios_iniciais = [];

        for ($i=7; $i <= 22; $i++) { 
            if($i < 10){
                $horarios_iniciais[] = '0'.$i.':00';
                $horarios_iniciais[] = '0'.$i.':30';
            }
            else{
                $horarios_iniciais[] = $i.':00';
                $horarios_iniciais[] = $i.':30';
            }
        }

        foreach ($agendamentos as $agendamento) {
            $key_ini = array_search($agendamento->horario_inicial, $horarios_iniciais);
            
            if($key_ini !== false){
                $key_fim = array_search($agendamento->horario_final, $horarios_iniciais);
                $remove_qtd = $key_fim - $key_ini;

                array_splice($horarios_iniciais, $key_ini, $remove_qtd);
            }
            else{
                return false;
            }
        }


        // return response()->json($agendamentos);
        
        return ($horarios_iniciais);
    }
    

    public function ajaxHorariosFinais(Request $request)
    {
        $agendamentos = Agendamento::select('horario_inicial', 'horario_final')
            ->where('sala_id', '=', $request->sala_id)
            ->where('data', '=', $request->data)
            ->where('horario_inicial', '>=', $request->horario_inicial)
            ->first();
        

        $horarios_finais = [];
        //preenchendo de 7:30 às 23:00 (7:00 e 23:30 são usados para a lógica de disponíveis e retirados ao final)
        for ($i=7; $i <= 23; $i++) { 
            if($i < 10){
                $horarios_finais[] = '0'.$i.':00';
                $horarios_finais[] = '0'.$i.':30';
            }
            else{
                $horarios_finais[] = $i.':00';
                $horarios_finais[] = $i.':30';
            }
        }


        //retornar todos horários posteriores (não tem mais reservas à frente)
        if(!$agendamentos){
            
            $key_ini = array_search($request->horario_inicial, $horarios_finais);
            
            if($key_ini !== false){
                
                $horarios_finais_disponiveis = array_slice($horarios_finais, $key_ini+1, count($horarios_finais));
                array_pop($horarios_finais_disponiveis);
                
                return $horarios_finais_disponiveis;
            }
            else{
                return false;
            }
        }
        //Retonar horários até a próxima reserva
        else{

            $key_ini = array_search($request->horario_inicial, $horarios_finais);
            
            if($key_ini !== false){
                
                $key_proximo_horario_inicial = array_search($agendamentos->horario_inicial, $horarios_finais);

                $remove_qtd = $key_proximo_horario_inicial - $key_ini;

                $horarios_finais_disponiveis = array_slice($horarios_finais, $key_ini+1, $remove_qtd+1);
                array_pop($horarios_finais_disponiveis);
                
                return $horarios_finais_disponiveis;
            }
            else{
                return false;
            }
        }









        // //verifica disponíveis
        // foreach ($agendamentos as $agendamento) {


        //     $key_ini = array_search($agendamento->horario_inicial, $horarios_finais);
            
        //     if($key_ini !== false){
        //         $key_fim = array_search($agendamento->horario_final, $horarios_finais);
        //         array_splice($horarios_finais, $key_ini+1, $key_fim+1);
        //     }
        // }

        // //Retira horários 7:00 e 23:30
        // array_shift($horarios_finais);
        // array_pop($horarios_finais);

        // // return response()->json($agendamentos);
        
        // return ($horarios_finais);
    }

}
