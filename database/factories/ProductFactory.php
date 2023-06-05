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
            'color' => fake()->randomElement(['Noir', 'Blanc', 'Rouge', 'Bleu', 'Vert', 'Jaune', 'Orange', 'Violet', 'Rose', 'Marron', 'Gris', 'Beige', 'Bleu marine', 'Bordeaux', 'Kaki', 'Turquoise', 'Doré', 'Argenté', 'Transparent', 'Multicolore']),
            'brand' => fake()->randomElement(['Nike', 'Adidas', 'Puma', 'Reebok', 'New Balance', 'Asics', 'Vans', 'Converse', 'Fila', 'Balenciaga', 'Gucci', 'Jordan', 'Lacoste', 'Le Coq Sportif', 'Mizuno', 'Skechers', 'Timberland', 'Under Armour', 'Yeezy', 'Autre']),
            'size' => fake()->numberBetween(20, 50),
            'stock_available' => fake()->randomNumber(3, false),
            'gender' => fake()->title('male'|'female' |'autre'),
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
