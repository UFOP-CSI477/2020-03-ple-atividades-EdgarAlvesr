<?php

namespace Database\Factories;

use App\Models\Agendamento;
use App\Models\Sala;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AgendamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agendamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sala_id' => Sala::factory(),
            'user_id' => User::factory(),
            'titulo' => $this->faker->sentence($nbWords = 5, $variableNbWords = true),
            'data' => $this->faker->date(),
            'horario_inicial' => $this->faker->time(),
            'horario_final' => $this->faker->time()
        ];
    }
}
