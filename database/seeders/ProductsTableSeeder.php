<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Product::create([
            'name' => 'Smartphone',
            'price' => 599.99,
            'color' => 'Negre',
            'memory_ram' => '8GB',
            'category_id' => 1,
        ]);

        \App\Models\Product::create([
            'name' => 'Laptop',
            'price' => 1299.99,
            'color' => 'Platejat',
            'memory_ram' => '16GB',
            'category_id' => 1,
        ]);
    }
}
