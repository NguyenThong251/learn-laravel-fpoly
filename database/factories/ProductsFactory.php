<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'description' => fake()->text,
            'price' => fake()->randomFloat(2, 1, 100),
            'quantity' => fake()->numberBetween(1, 100),
            'image' => fake()->imageUrl(640, 480),
            'discount' => fake()->randomFloat(2, 1, 100),
            'bestseller' => fake() -> numberBetween(0,1),
            'brand_id' => fake()->numberBetween(1, 5),
            'category_id' => fake()->numberBetween(1, 5),
        ];
    }
}