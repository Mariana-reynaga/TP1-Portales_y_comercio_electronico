<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->sentence(4),
            'author'=> fake()->name(),
            'post'=>fake()->paragraphs(4, true),
            'created_at'=>now(),
            'updated_at'=> now()
        ];
    }
}
