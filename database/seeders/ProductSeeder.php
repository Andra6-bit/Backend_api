<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create(['name' => 'Laptop', 'price' => 8000000, 'stock' => 10]);
        \App\Models\Product::create(['name' => 'Mouse', 'price' => 150000, 'stock' => 20]);
        \App\Models\Product::create(['name' => 'Keyboard', 'price' => 300000, 'stock' => 15]);
        //
    }
}
