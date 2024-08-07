<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class AddmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('addmission')->insert([
            'patient_name' => 'Halima',
            'seat' => 'A-07',
            'department_id' => '3',
            'addmission_date' => '11-05-2024',
            'release_date' => '21-05-2024',
            'total_bill' => '20,000',

        ]);

        DB::table('addmission')->insert([
            'patient_name' => 'Rasel Mia',
            'seat' => 'C-07',
            'department_id' => '1',
            'addmission_date' => '08-05-2024',
            'release_date' => '11-05-2024',
            'total_bill' => '70,000',


        ]);


        DB::table('addmission')->insert([
            'patient_name' => 'Rabbi Hossen',
            'seat' => 'B-07',
            'department_id' => '3',
            'addmission_date' => '11-04-2024',
            'release_date' => '21-04-2024',
            'total_bill' => '40,000',


        ]);
    }
}
