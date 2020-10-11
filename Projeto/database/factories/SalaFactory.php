<?php

namespace Database\Factories;

use App\Models\Sala;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SalaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sala::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero' => $this->faker->regexify('[A-I]([0-9]{3})'),
            'nome' => null,
            'capacidade' => $this->faker->numberBetween(0, 300)
        ];
    }
}
