<?php

namespace App\Services;

class ExerciseService
{
    public function getMenExercises()
    {
        // Load and decode MenExercises.json file
        $menExercisesJson = file_get_contents(resource_path('json/MenExercises.json'));
        // return json_decode($menExercisesJson['exercises'], true);
        $menExercises = json_decode($menExercisesJson, true);
    // dd($menExercises['exercises']); // Debugging statement
    return $menExercises['exercises'];
    }

    public function getWomenExercises()
    {
        // Load and decode WomenExercises.json file
        $womenExercisesJson = file_get_contents(resource_path('json/WomenExercises.json'));
        $womenExercisesJson = json_decode($womenExercisesJson, true);
    // dd($menExercises['exercises']); // Debugging statement
    return $womenExercisesJson['exercises'];
    }
}
