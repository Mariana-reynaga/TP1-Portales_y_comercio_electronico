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
            'blog_title'=> fake()->sentence(4),
            'blog_author'=> fake()->name(),
            'blog_tags'=>fake()->words(4, true),
            'blog_post'=>fake()->paragraphs(6, true),
            'created_at'=>now(),
            'updated_at'=> now()
        ];
    }
}
