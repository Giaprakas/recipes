<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'category_id' => $this->faker->randomElement(['1','2','3']),
            'body' => $this->faker->paragraph(),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 100),
        ];
    }
}