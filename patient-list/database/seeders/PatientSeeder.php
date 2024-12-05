<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;
use Faker\Factory as Faker;

class PatientSeeder extends Seeder
{
    public function run()
    {
        // Initialize Faker
        $faker = Faker::create();

        // Insert 10 random patients into the database
        foreach (range(1, 10) as $index) {
            Patient::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'dob' => $faker->date('Y-m-d', '2000-01-01'),
                'address' => $faker->address,
            ]);
        }
    }
}
