<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['id' => 1, 'name' => 'CÀ PHÊ VY', 'price' => 200000, 'image' => 'image.png', 'type' => 'cà phê']
        ]);
    }
}
