<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brandsRecods = [
            [
                'id' => 1,
                'name' => 'Arrow',
                'status' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Gap',
                'status' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Carlo',
                'status' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Peter',
                'status' => 1,
            ],
        ];
        Brand::insert($brandsRecods);
    }
}
