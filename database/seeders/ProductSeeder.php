<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = collect([
            'HP Printer',
            'Canon Printer',
            'Canon Ink',
            'Darkroom Kit',
            'A4 Paper 500',
            'A1 Paper 10',
            'Drylab Gloss',
            'Anti-curl roller',
        ]);

        $products->each(function ($product) {
            \App\Models\Product::factory()->create(['name' => $product]);
        });
    }
}
