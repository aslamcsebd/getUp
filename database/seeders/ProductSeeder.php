<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'category_id' => $faker->numberBetween(1, 20),
                'name' => $faker->word(),
                'description' => $faker->sentence(),
                'price' => $faker->numberBetween(5, 30),
                'stock' => $faker->numberBetween(5, 30),
                'total_sales' => $faker->numberBetween(5, 30),

            ]);
        }
    }
}
