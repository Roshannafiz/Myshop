<?php

namespace Database\Seeders;

use App\Models\ProductsAttribute;
use Illuminate\Database\Seeder;

class ProductsAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productAttributesRecords = [
            [
                'id' => 1,
                'product_id' => 1,
                'size' => 'Small',
                'price' => 120,
                'stock' => 100,
                'sku' => 'TRC00-S',
                'status' => 1,
            ],
            [
                'id' => 2,
                'product_id' => 1,
                'size' => 'Medium',
                'price' => 80,
                'stock' => 200,
                'sku' => 'TRC00-M',
                'status' => 1,
            ],
            [
                'id' => 3,
                'product_id' => 1,
                'size' => 'Large',
                'price' => 50,
                'stock' => 100,
                'sku' => 'TRC00-L',
                'status' => 1,
            ],
        ];
        ProductsAttribute::insert($productAttributesRecords);
    }
}
