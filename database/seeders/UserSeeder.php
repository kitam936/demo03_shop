<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => '北村',
                'email' => 'kitamura@dijon.co.jp',
                'password' => Hash::make('tk9521dj'),
                'role_id' => 1,
                'shop_id' => 101,
                'mailService' => 1
            ],
            [
                'id' => 6,
                'name' => 'マネージャーA',
                'email' => 'test1@test.co.jp',
                'password' => Hash::make('ku5783dj'),
                'role_id' => 2,
                'shop_id' => 101,
                'mailService' => 0
            ],
            [
                'id' => 7,
                'name' => 'スタッフB',
                'email' => 'test2@test.co.jp',
                'password' => Hash::make('ym3172dj'),
                'role_id' => 7,
                'shop_id' => 101,
                'mailService' => 0
            ],
            [
                'id' => 9,
                'name' => 'スタッフC',
                'email' => 'test3@test.co.jp',
                'password' => Hash::make('im4278dj'),
                'role_id' => 9,
                'shop_id' => 101,
                'mailService' => 0
            ],
            [
                'id' => 11,
                'name' => 'スタッフD',
                'email' => 'test4@test.co.jp',
                'password' => Hash::make('Tk4651dj#'),
                'role_id' => 9,
                'shop_id' => 3201,
                'mailService' => 0
            ],
            [
                'id' => 12,
                'name' => 'マネージャーB',
                'email' => 'test5@test.co.jp',
                'password' => Hash::make('dh9409dj'),
                'role_id' => 5,
                'shop_id' => 101,
                'mailService' => 0
            ],


        ]);
    }
}
