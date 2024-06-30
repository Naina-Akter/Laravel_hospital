<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresceiptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('presceiption')->insert([
            'doctor' => 'Naina Afrin' ,
            'patient' => 'Md. ali' ,
            'medicine' => 'Napa' ,
            'dose' => '1+0+1' ,
            'day' => '7 days' ,
            'date' => '03-05-2024' ,



        ]);

        DB::table('presceiption')->insert([
            'doctor' => 'Rafi Hossen' ,
            'patient' => 'Nasima' ,
            'medicine' => 'Doxicap' ,
            'dose' => '1+0+1' ,
            'day' => '2 months' ,
            'date' => '03-05-2024' ,



        ]);
    }
}
