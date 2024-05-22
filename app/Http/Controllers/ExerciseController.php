<?php

namespace App\Http\Controllers;

use app\Services\ExerciseService;
use Illuminate\Http\Request;



class ExerciseController extends Controller
{
    protected $exerciseService;

    public function __construct(ExerciseService $exerciseService)
    {
        $this->exerciseService = $exerciseService;
    }

    public function getMenExercises()
    {
        $exercises = $this->exerciseService->getExercisesByTarget('chest');
        return response()->json($exercises);
    }

    public function getWomenExercises()
    {
        $exercises = $this->exerciseService->getExercisesByTarget('legs');
        return response()->json($exercises);
    }


    public function showMenExercises()
{
    $exercises = $this->exerciseService->getExercisesByTarget('chest');
    return view('exercises.men', compact('exercises'));
}

public function showWomenExercises()
{
    $exercises = $this->exerciseService->getExercisesByTarget('legs');
    return view('exercises.women', compact('exercises'));
}
}
