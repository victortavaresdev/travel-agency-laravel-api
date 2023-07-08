<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TourFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->text(10),
            'starting_date' => now(),
            'ending_date' => now()->addDays(rand(1, 10)),
            'price' => fake()->randomFloat(2, 10, 999),
        ];
    }
}
