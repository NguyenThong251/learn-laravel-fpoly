<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders;
use App\Models\categories;
use Faker\Factory as Faker;
// use Illuminate\Support\Testing\Fakes\Fake as FakesFake;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            categories::create([
                'name' => $fake->name,
            ]);
        }
        
    }
}