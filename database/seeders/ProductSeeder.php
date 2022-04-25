<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'LARAVEL Y LIVEWIRE',
            'cost' => 200,
            'price' => 350,
            'barcode' => '3932494329493',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'curso.png',
        ]);
        Product::create([
            'name' => 'JAVA',
            'cost' => 500,
            'price' => 750,
            'barcode' => '3932494329494',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 2,
            'image' => 'java.png',
        ]);
        Product::create([
            'name' => 'Ajax',
            'cost' => 300,
            'price' => 800,
            'barcode' => '3932494329495',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 3,
            'image' => 'ajax.png',
        ]);
        Product::create([
            'name' => 'Xiaomi MiMIX2',
            'cost' => 400,
            'price' => 1500,
            'barcode' => '3932494329496',
            'stock' => 100,
            'alerts' => 10,
            'category_id' => 4,
            'image' => 'xiaomimimix2.png',
        ]);
    }
}
