<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('department')->insert([
            'name' => 'Medicine',
        ]);
        DB::table('department')->insert([
            'name' => 'Hematology',
        ]);
        DB::table('department')->insert([
            'name' => 'Neorology',
        ]);
        DB::table('department')->insert([
            'name' => 'Psychology',
        ]);
    }
}
