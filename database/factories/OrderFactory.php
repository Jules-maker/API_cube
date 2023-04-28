<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'total_price' => fake()->randomFloat(2, 10, 500),
            'order_date' => fake()->dateTimeBetween('-1 month', 'now')->format('Y-m-d H:i:s'),
            'status' => fake()->boolean(),
         ];
    }
}
