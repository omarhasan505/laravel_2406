<?php

namespace Database\Seeders;

use App\Models\Category\Category;
use App\Models\Product\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::first();
        if (!$category) {
            throw new \Exception('No category found. Seed categories first.');
        }

        $product = new Product();
        $product ->title = 'Sample Product';
        $product-> price = 199.99;
        $product->category_id = $category->id;
        $product->save();

        // $category = Category::first(); // MUST exist

        // Product::create([
        //     'title' => 'Sample Product',
        //     'price' => 199.99,
        //     'category_id' => $category->id, // ✅ REQUIRED
        // ]);
    }
}
