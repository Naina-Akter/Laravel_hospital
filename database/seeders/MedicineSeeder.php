<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicine')->insert([
            'name' => 'Napa'
        ]);
        DB::table('medicine')->insert([
            'name' => 'Doxicap'
        ]);

        DB::table('medicine')->insert([
            'name' => 'Cefdinir'
        ]);

        DB::table('medicine')->insert([
            'name' => 'Nicotine'
        ]);

        DB::table('medicine')->insert([
            'name' => 'Novolin N'
        ]);
    }
}
