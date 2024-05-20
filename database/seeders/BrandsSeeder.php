<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\brands;;
use Faker\Factory as Faker;
class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            brands::create([
                'brand_name' => $fake->name,
            ]);
        }
    }
}