<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BidderFactory extends Factory
{
    protected $model = \App\Models\Bidder::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'address' => $this->faker->address,
            'email' => $this->faker->safeEmail,
        ];
    }
}

