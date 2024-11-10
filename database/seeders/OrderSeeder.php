<?php

namespace Database\Seeders;

use App\Models\Order;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Order::create([
                'customer_id' => $faker->numberBetween(1, 20),
                'product_id' => $faker->numberBetween(1, 50),
                'order_date' => $faker->dateTimeBetween('-1 month', 'now'),
                'quantity' => $faker->numberBetween(1, 10),
                'order_amount' => $faker->randomFloat(2, 5, 100)
            ]);
        }
    }
}
