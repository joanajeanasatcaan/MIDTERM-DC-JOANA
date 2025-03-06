<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cars>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Car::class;
    public function definition()
    {
        return [
            'make' => $this->faker->company,
            'model' => $this->faker->word,
            'year' => $this->faker->year,
            'miles' => $this->faker->numberBetween(10000, 200000),
        ];
    }
}
