<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Coach;

class CoachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coach::create([
            'name' => 'John Doe',
            'description' => 'Certified personal trainer with 10 years of experience.',
            'image' => 'https://i.pinimg.com/236x/bd/04/30/bd04308ac7863c8e58b719eff1d1de80.jpg',
        ]);

        Coach::create([
            'name' => 'Jane Smith',
            'description' => 'Experienced yoga instructor specializing in Vinyasa flow.',
            'image' => 'https://i.pinimg.com/236x/74/cd/bf/74cdbf7ce3156aa1f22c6d5010c247ec.jpg',
        ]);

        Coach::create([
            'name' => 'sansa linster',
            'description' => 'Experienced yoga instructor specializing in Vinyasa flow.',
            'image' => 'https://i.pinimg.com/236x/65/b8/ff/65b8fffb6a29989a78e6900661cb722d.jpg',
        ]);

        Coach::create([
            'name' => 'daenerys targaryen',
            'description' => 'Experienced yoga instructor specializing in Vinyasa flow.',
            'image' => 'https://i.pinimg.com/236x/38/99/3e/38993e272a7d07ef982a644ace5e2429.jpg ',
        ]);

        // Add more sample data as needed
    }
}
