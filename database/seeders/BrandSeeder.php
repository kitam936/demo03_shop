<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
            'id' => 1,
            'brand_name' => 'A',
            'brand_info' => 'A',
            ],
            [
            'id' => 6,
            'brand_name' => 'B',
            'brand_info' => 'B',
            ],
            [
            'id' => 7,
            'brand_name' => 'C',
            'brand_info' => 'C',
            ],



        ]);
    }
}
