<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointment')->insert([
            'name' => 'lima Khan',
            'email' => 'lima@gmail.com',
            'department_id' => '1',
            'date' => '11-05-2024',
            'phone' => '01521052024',
            'message' => 'hjkdfghj',

        ]);

        DB::table('appointment')->insert([
            'name' => 'Aysha Khan',
            'email' => 'khanaysha@gmail.com',
            'department_id' => '3',
            'date' => '18-05-2024',
            'phone' => '0179052024',
            'message' => 'this is my messages',

        ]);
    }
}
