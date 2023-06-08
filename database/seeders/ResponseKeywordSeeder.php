<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Keyword;
use App\Models\Response;

class ResponseKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $keywords = ['Bonjour', 'Catégorie', 'Produit', 'Commander','inscription','connexion','catalogue','ajout panier','suppression panier','consulter panier'];
        for ($i = 0; $i < 10; $i++) {
            $responses = Response::all();
            $response = $responses[$i];
            Keyword::create([
                'keywords' => $keywords[$i],
                'responses_id' => $response->id,
            ]);
        }
    
    }
}
