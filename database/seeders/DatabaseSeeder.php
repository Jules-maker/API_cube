<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        // \App\Models\Address::factory(10)->create(); is created in UserFactory because of the relationship
        \App\Models\Category::factory(10)->create();
        \App\Models\Response::factory(10)->create();
        $this->call(ResponseKeywordSeeder::class);
        \App\Models\Product::factory(10)->create();
        \App\Models\Order::factory(10)->create();
        \App\Models\OrderItem::factory(10)->create();
        // \App\Models\Role::factory(10)->create(); 
        //for responses


        // \App\Models\Status::factory(10)->create(); ?
//calling the configure function in KeywordFactory.php to attach responses to keywords
        // \App\Models\Keyword::factory(10)->create()->configure();
    }
}
