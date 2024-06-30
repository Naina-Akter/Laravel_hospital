<?php

namespace Database\Seeders;

 
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\AddmissionController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            DoctorSeeder::class,
            DepartmentSeeder::class,
            PatientSeeder::class,
            MedicineSeeder::class,
            SeatSeeder::class,
            TreatmentSeeder::class,
            AddmissionSeeder::class,
            PresceiptionSeeder::class,
             
        ]);
    }
}
