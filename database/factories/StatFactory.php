<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'likes' => $this->faker->numberBetween($min = 1, $max = 25),
            'views' => $this->faker->numberBetween($min = 27, $max = 120),
        ];
    }
}
