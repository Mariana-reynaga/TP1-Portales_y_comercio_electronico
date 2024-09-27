<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Producto;
use App\Models\Blog;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Producto::factory(5)->create();
        Blog::factory(3)->create();
    }
}
