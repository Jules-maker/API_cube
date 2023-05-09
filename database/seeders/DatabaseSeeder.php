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
        // façon statique pour les mots clés par expl
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Address::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Keyword::factory(10)->create();
        \App\Models\Order::factory(10)->create();
        \App\Models\OrderItem::factory(10)->create();
        \App\Models\Product::factory(10)->create();
        // \App\Models\Role::factory(10)->create(); 
        //for responses
        \App\Models\Response::factory(10)->create();


        // \App\Models\Status::factory(10)->create(); ?

    }
}
