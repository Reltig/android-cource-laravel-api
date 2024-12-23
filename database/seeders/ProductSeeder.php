<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            'id' => 0,
            'name' => "Name 1",
            'description' => "Description 1",
            'icon_url' => "https://placehold.co/400x400/F00/0FF/png",
            'price' => 100,
            'rating' => 5.0,
            'ratings_count' => 1,
            'comments_count' => 1
        ]);
        Product::insert([
            'id' => 1,
            'name' => "Name 2",
            'description' => "Description 2",
            'icon_url' => "https://placehold.co/400x400/F00/0FF/png",
            'price' => 100,
            'rating' => 5.0,
            'ratings_count' => 1,
            'comments_count' => 1
        ]);
        Product::insert([
            'id' => 2,
            'name' => "Name 3",
            'description' => "Description 2",
            'icon_url' => "https://placehold.co/400x400/F00/0FF/png",
            'price' => 100,
            'rating' => 5.0,
            'ratings_count' => 1,
            'comments_count' => 1
        ]);
    }
}
