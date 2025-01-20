<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            ['name' => 'Yoga', 'description' => 'Relaxing and meditative yoga sessions.', 'instructor' => 'John Doe', 'time' => '08:00:00'],
            ['name' => 'Pilates', 'description' => 'Strengthen your core with pilates.', 'instructor' => 'Jane Smith', 'time' => '09:00:00'],
            ['name' => 'Zumba', 'description' => 'Dance your way to fitness.', 'instructor' => 'Mark Johnson', 'time' => '10:00:00'],
            ['name' => 'CrossFit', 'description' => 'High-intensity fitness training.', 'instructor' => 'Luke Brown', 'time' => '11:00:00'],
            ['name' => 'Bodybuilding', 'description' => 'Muscle building and strength training.', 'instructor' => 'Chris Evans', 'time' => '12:00:00'],
            ['name' => 'Kickboxing', 'description' => 'Martial arts and fitness combined.', 'instructor' => 'Bruce Lee', 'time' => '13:00:00'],
            ['name' => 'Spinning', 'description' => 'Indoor cycling classes.', 'instructor' => 'Emma Green', 'time' => '14:00:00'],
            ['name' => 'HIIT', 'description' => 'High-Intensity Interval Training.', 'instructor' => 'Mike Black', 'time' => '15:00:00'],
            ['name' => 'Aerobics', 'description' => 'Cardio workouts to music.', 'instructor' => 'Lisa White', 'time' => '16:00:00'],
            ['name' => 'Dance Fitness', 'description' => 'Dance-based fitness classes.', 'instructor' => 'Jennifer Lopez', 'time' => '17:00:00'],
            ['name' => 'Boot Camp', 'description' => 'Intense military-style workouts.', 'instructor' => 'David Goggins', 'time' => '18:00:00'],
            ['name' => 'Boxing', 'description' => 'Boxing techniques and training.', 'instructor' => 'Muhammad Ali', 'time' => '19:00:00'],
            ['name' => 'MMA', 'description' => 'Mixed Martial Arts training.', 'instructor' => 'Conor McGregor', 'time' => '20:00:00'],
            ['name' => 'Swimming', 'description' => 'Swimming classes for all levels.', 'instructor' => 'Michael Phelps', 'time' => '21:00:00'],
            ['name' => 'Aqua Aerobics', 'description' => 'Aerobics in the pool.', 'instructor' => 'Sarah Blue', 'time' => '22:00:00'],
            ['name' => 'Strength Training', 'description' => 'Weightlifting and resistance training.', 'instructor' => 'Arnold Schwarzenegger', 'time' => '23:00:00'],
            ['name' => 'Cardio Kickboxing', 'description' => 'Cardio and kickboxing combined.', 'instructor' => 'Jackie Chan', 'time' => '06:00:00'],
            ['name' => 'TRX', 'description' => 'Suspension training system.', 'instructor' => 'Randy Couture', 'time' => '07:00:00'],
            ['name' => 'Tai Chi', 'description' => 'Chinese martial art for defense training and health.', 'instructor' => 'Jet Li', 'time' => '08:30:00'],
            ['name' => 'Kettlebell Training', 'description' => 'Workouts using kettlebells.', 'instructor' => 'Pavel Tsatsouline', 'time' => '09:30:00'],
            ['name' => 'Powerlifting', 'description' => 'Competitive weightlifting training.', 'instructor' => 'Eddie Hall', 'time' => '10:30:00'],
            ['name' => 'Calisthenics', 'description' => 'Bodyweight strength training.', 'instructor' => 'Frank Medrano', 'time' => '11:30:00'],
            ['name' => 'Flexibility Training', 'description' => 'Improving flexibility and mobility.', 'instructor' => 'Alina Somova', 'time' => '12:30:00'],
            ['name' => 'Core Training', 'description' => 'Exercises focused on the core muscles.', 'instructor' => 'Jillian Michaels', 'time' => '13:30:00'],
            ['name' => 'Sculpt and Tone', 'description' => 'Body sculpting and toning exercises.', 'instructor' => 'Bret Contreras', 'time' => '14:30:00'],
            ['name' => 'Gymnastics', 'description' => 'Gymnastics skills and fitness.', 'instructor' => 'Simone Biles', 'time' => '15:30:00'],
        ]);
    }
}
