<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class gymseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 26; $i++) {
            UserInfo::create([
                'last_name' => $faker->lastName,
                'first_name' => $faker->firstName,
                'sex' => $faker->randomElement(['M', 'F']),
                'cin' => strtoupper($faker->lexify('????????')), // Example CIN format
                'birth' => $faker->date,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
            ]);
        }
    }
}
