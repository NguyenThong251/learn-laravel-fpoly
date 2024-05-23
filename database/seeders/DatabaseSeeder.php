<?php

namespace Database\Seeders;

use App\Models\banner;
use App\Models\brands;
use App\Models\categories;
use App\Models\products;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        brands::factory(10)->create();
        categories::factory(10)->create();
        products::factory(100)->create();
        banner::factory(3)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}