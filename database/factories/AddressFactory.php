<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'type_of_street' => fake()->randomElement(['Rue', 'Avenue', 'Boulevard', 'Chemin']),
            'number' => fake()->randomNumber(2, false),
            'street_name' => fake()->streetName(),  
            'zipcode' => fake()->randomNumber(5, true),
            
        ];
    }
}
