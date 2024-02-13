<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> unique() -> sentence(1),
            'ingredients' => fake() -> sentence(10),
            'price' => fake() -> randomFloat(2, 4, 30),
            'available' => fake() -> boolean(),
            'campo_inventato' => fake() -> word()
        ];
    }
}
