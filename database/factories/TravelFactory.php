<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TravelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->text(10),
            'description' => fake()->text(50),
            'is_public' => fake()->boolean(),
            'number_of_days' => fake()->numberBetween(1, 10),
        ];
    }
}
