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
        Product::create([
            'name' => "LoveYourself",
            'category_id' => 1,
            'pricing' => 59.99,
        ]);
        Product::create([
            'name' => "Dynamite",
            'category_id' => 1,
            'pricing' => 69.99,
        ]);
        Product::create([
            'name' => "Little Prince",
            'category_id' => 2,
            'pricing' => 49.99,
        ]);
    }
}