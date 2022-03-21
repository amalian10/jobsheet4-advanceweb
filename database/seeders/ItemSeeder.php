<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => 'kursi',
            'image' => '1.jfif'
        ]);
        DB::table('items')->insert([
            'name' => 'kursi',
            'image' => '2.jfif'
        ]);
        DB::table('items')->insert([
            'name' => 'kursi',
            'image' => '4.jfif'
        ]);
        DB::table('items')->insert([
            'name' => 'kursi',
            'image' => '10.jfif'
        ]);
    }
}
