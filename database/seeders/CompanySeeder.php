<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{

    public function run()
    {
        DB::table('companies')->insert([
            [
            'id' => 1100,
            'co_name' => 'S社',
            'co_info' => 'S社',
            ],
            [
            'id' => 3200,
            'co_name' => 'IY社',
            'co_info' => 'IY社',
            ],
            [
            'id' => 5300,
            'co_name' => 'U社',
            'co_info' => 'U社',
            ],



        ]);
    }
}
