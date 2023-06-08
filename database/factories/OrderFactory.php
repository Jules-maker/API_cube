<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Address;
use App\Models\Order;
use App\Models\Product;
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
        $user = User::all()->random();
        //on appel la fonction address() de User.php dans le model
        $address = $user->address;
        return [
            'total_price' => fake()->randomFloat(2, 10, 500),
            'order_date' => fake()->dateTimeBetween('-1 month', 'now')->format('Y-m-d H:i:s'),
            'status' => fake()->boolean(),
            'users_id' => $user->id,
            'address_id' => $address->id,
         ];
    }

    public function configure(): OrderFactory
    {
        return $this->afterCreating(function (Order $order) {
            $order->products()->attach(
                Product::all()->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
