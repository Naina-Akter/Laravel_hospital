<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctor')->insert([
            'name' => 'Assoc. Prof. Dr. Naz Yasmin',
            'img' => 'ss.webp',
            'qualification' => 'MBBS (DMC), FCPS (BCPS), MS (DU)',
            'fee' => '800',
            'email' => 'doctor@gmail.com',
            'password' => Hash::make('doctor123'),
            'phone' => '01798537135',
            'designation' => 'SR. CONSULTANT',
            'department' => '2',
        ]);
        DB::table('doctor')->insert([
            'name' => 'Prof. Dr. Wahida Khan',
            'img' => 'jannatul .webp',
            'qualification' => 'MBBS, MD (Cardiology)',
            'fee' => '1000',
            'email' => 'wahida@gmail.com',
            'password' => Hash::make('doctor123'),
            'phone' => '01798537136',
            'designation' => 'Associate Professor',
            'department' => '1',
        ]);
        DB::table('doctor')->insert([
            'name' => 'Rasel Ahmed',
            'img' => 'Dr.webp',
            'qualification' => 'MBBS, MD (Cardiology)',
            'fee' => '1000',
            'email' => 'rasel@gmail.com',
            'password' => Hash::make('doctor123'),
            'phone' => '01798537137',
            'designation' => 'Professor',
            'department' => '3',
        ]);
    }
}
