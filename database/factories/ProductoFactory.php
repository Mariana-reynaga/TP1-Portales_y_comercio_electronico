<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prod_name' => fake()->words(3, true),
            'prod_price' => fake()->randomNumber(4, false),
            'prod_description'=>fake()->paragraphs(4, true),
            'prod_stock'=> fake()->randomNumber(3, false),
            'created_at'=>now(),
            'updated_at'=> now()
        ];
    }
}
