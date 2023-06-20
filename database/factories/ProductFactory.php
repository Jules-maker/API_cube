<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'label' => fake()->randomElement(['Nike Dunk Low', 'Nike Air Max', 'Nike Air Force', 'Air Max 97', 'Pume Suède', 'Nike P-6000', 'Air Jordan 1 Mid', 'Nike Air Huarache']),
            'price_unit' => fake()->randomFloat(2, 0, 2500),
            'picture_path' => fake()->lexify('???????????'),
            'stock_available' => fake()->randomNumber(3, false),
            'categories_id' => Category::all()->random()->id,
            
        ];
    }

    public function configure(): ProductFactory
    {
        return $this->afterCreating(function (Product $product) {
            $product->categories()->attach(
                Category::all()->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
