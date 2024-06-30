<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('treatment_type')->insert([
            'name' => 'MRI Scan',
            'cost' =>  '4000',
            'status' => 'Active'

        ]);

        DB::table('treatment_type')->insert([
            'name' => 'ACE blood test',
            'cost' =>  '400',
            'status' => 'Active'

        ]);


        DB::table('treatment_type')->insert([
            'name' => 'Amylase-urine',
            'cost' =>  '700',
            'status' => 'Active'

        ]);


        DB::table('treatment_type')->insert([
            'name' => 'Bone x-ray',
            'cost' =>  '4000',
            'status' => 'Active'

        ]);
    }
}
