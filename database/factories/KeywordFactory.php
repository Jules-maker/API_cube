<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\Keyword;
use App\Models\Response;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Keyword>
 */
class KeywordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'keywords' => fake()->randomElement(['Bonjour', 'Catégorie', 'Produit', 'Commande']),
         ];
    }
    //function not used because of ResponseKeywordSeeder but can be refactorized later to be used in the same way as other factories in the DatabaseSeeder.php
//     function configure(): KeywordFactory
// {
//     return $this->afterCreating(function (Keyword $keyword) {
//         $response = Response::all()->random();
//         $keyword->response()->associate($response);
//         $keyword->save();
//     });
// }
}
