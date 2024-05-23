<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         'title_1' => fake()->title,
         'title_2' => fake()->title,
         'description' => fake()->text,
         'image' => fake()->imageUrl(640, 480),
        ];
    }
}