<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointment')->insert([
            ['user_id' => 1, 'purpose' => 'Dental Extraction', 'appointment_date' => '2024-01-24', 'appointment_time' => '8:00 am - 9:00 am'],
            ['user_id' => 2, 'purpose' => 'Dental Filling', 'appointment_date' => '2024-01-24', 'appointment_time' => '10:00 am - 11:00 am'],
            ['user_id' => 3, 'purpose' => 'Urinalysis', 'appointment_date' => '2024-01-24', 'appointment_time' => '1:00 pm - 2:00 pm'],
            ['user_id' => 4, 'purpose' => 'Blood Test', 'appointment_date' => '2024-01-24', 'appointment_time' => '3:00 pm - 4:00 pm'],
            ['user_id' => 5, 'purpose' => 'Pediatrics', 'appointment_date' => '2024-01-25', 'appointment_time' => '8:00 am - 9:00 am'],
        ]);
    }
}
