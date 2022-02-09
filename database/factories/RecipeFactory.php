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
            // 'id' => $this->faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
            'title' => $this->faker->word(),
            'category' => $this->faker->randomElement($array= array('spagheti','meats','salads')),
            'body' => $this->faker->paragraph(),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 100),
        ];
    }
}