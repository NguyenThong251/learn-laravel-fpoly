<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\products;
use Faker\Factory as Faker;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            products::create([
                'name' => $fake->name,
                'description' => $fake->text,
                'price' => $fake->randomFloat(2, 1, 100),
                'quantity' => $fake->numberBetween(1, 100),
                'image' => $fake->imageUrl(640, 480),
                'category_id' => $fake->numberBetween(1, 5),
               
            ]);
        }
    }
}