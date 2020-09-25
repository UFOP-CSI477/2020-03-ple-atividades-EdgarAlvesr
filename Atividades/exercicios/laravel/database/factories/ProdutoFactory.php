<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Gerando dados aleatórios com o "faker"
        return [
            "nome" => $this->faker->word,
            "um" => $this->faker->randomElement($array = array ('l','ml','g','kg','m','cm'))
        ];
    }
}
