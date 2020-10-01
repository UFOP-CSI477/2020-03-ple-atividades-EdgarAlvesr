<?php

namespace Database\Factories;

use App\Models\Equipamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->randomElement($array = array ('Computador desktop','Impressora','Teclado','Mouse','Telefone','Fone com microfone','Roteador','No break','Projetor','Repetidor de sinal wi-fi','Caixa de som','TV','Monitor','Notebook auxiliar'))
        ];
    }
}
