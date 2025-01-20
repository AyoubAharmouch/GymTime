<?php
namespace App\Http\Controllers;

use App\Services\ExerciseService;

class ExerciseController extends Controller
{
    protected $exerciseService;

    public function __construct(ExerciseService $exerciseService)
    {
        $this->exerciseService = $exerciseService;
    }

    public function showMenExercises()
    {
        $exercises = $this->exerciseService->getMenExercises();
        // Define muscle groups for men's exercises
        $muscleGroups = ['Chest', 'Back', 'Legs', 'Arms']; // Add other muscle groups as needed
        $selectedMuscles = []; // Initialize selected muscles as an empty array
        return view('exercises.men', compact('exercises', 'muscleGroups', 'selectedMuscles'));
    }

    public function showWomenExercises()
    {
        $exercises = $this->exerciseService->getWomenExercises();
        // Define muscle groups for women's exercises
        $muscleGroups = ['Glutes', 'Abs', 'Shoulders', 'Arms']; // Add other muscle groups as needed
        $selectedMuscles = []; // Initialize selected muscles as an empty array
        return view('exercises.women', compact('exercises', 'muscleGroups', 'selectedMuscles'));
    }
}
