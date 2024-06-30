<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patient')->insert([
            'name' => 'Nasima Khatun',
            'age' => '30',
            'address' => 'Tangail',
            'email' => 'nasima@gmail.com',
            'phone' => '0179977135',
            'gender' => 'Female',
            'password' => Hash::make('patient123'),
            
        ]);
        DB::table('patient')->insert([
            'name' => 'Md. Ali',
            'age' => '50',
            'address' => 'Savar',
            'email' => 'ali@gmail.com',
            'phone' => '01796097135',
            'gender' => 'Male',
            'password' => Hash::make('patient123'),
            
        ]);
    }
}
