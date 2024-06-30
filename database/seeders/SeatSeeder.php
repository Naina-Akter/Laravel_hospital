<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seat')->insert([
            'title' => 'A-01',
            'department' => 'Neorology',
            'cost' => '2500',
            'status' => 'Available',
        ]);

        DB::table('seat')->insert([
            'title' => 'A-07',
            'department' => 'Hematology',
            'cost' => '3000',
            'status' => 'Available',
        ]);

        DB::table('seat')->insert([
            'title' => 'B-22',
            'department' => 'Medicine',
            'cost' => '2500',
            'status' => 'Available',
        ]);

        DB::table('seat')->insert([
            'title' => 'A-01',
            'department' => 'Neorology',
            'cost' => '2500',
            'status' => 'Available',
        ]);

        DB::table('seat')->insert([
            'title' => 'D-11',
            'department' => 'Psychology',
            'cost' => '3000',
            'status' => 'Available',
        ]);
    }
}
