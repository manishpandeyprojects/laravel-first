<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $products = [
            [
                'name' => 'Product First',
                'price' => random_int(100, 500),
                'quantity' => random_int(0, 10),
                'category_id' => Category::where('name', 'mens')->first()->id,
            ],
            [
                'name' => 'Product Second',
                'price' => random_int(100, 500),
                'quantity' => random_int(0, 10),
                'category_id' => Category::where('name', 'womens')->first()->id,
            ],
            [
                'name' => 'Product Third',
                'price' => random_int(100, 500),
                'quantity' => random_int(0, 10),
                'category_id' => Category::where('name', 'kids')->first()->id,
            ],
            [
                'name' => 'Product Fourth',
                'price' => random_int(100, 500),
                'quantity' => random_int(0, 10),
                'category_id' => Category::where('name', 'technology')->first()->id,
            ],
        ];

        Product::insert($products);
    }
}
