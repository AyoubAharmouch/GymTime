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
        return view('exercises.men', compact('exercises'));
    }

    public function showWomenExercises()
    {
        $exercises = $this->exerciseService->getWomenExercises();
        return view('exercises.women', compact('exercises'));
    }
}
