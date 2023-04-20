<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'candra',
            'email' => 'candra@gmail.com',
            'password' => bcrypt('candra123'),
        ]);

        DB::table('users')->insert([
            'name' => 'carles',
            'email' => 'carles@gmail.com',
            'password' => bcrypt('carles123'),
        ]);
    }
}
