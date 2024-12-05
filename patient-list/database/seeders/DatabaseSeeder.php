<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the PatientSeeder
        $this->call(PatientSeeder::class);
    }
}
