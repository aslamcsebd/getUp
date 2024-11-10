<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            ProductCategory::create([
                'name' => $faker->words(2, true),
                'status' => 'Active',
            ]);
        }
    }
}
