<?php
// ItemController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Read JSON data from the files in the resources/json directory
        $menExercisesJson = file_get_contents(resource_path('json/MenExercises.json'));
        $womenExercisesJson = file_get_contents(resource_path('json/WomenExercises.json'));

        // Decode the JSON data into arrays
        $menExercises = json_decode($menExercisesJson, true)['exercises'];
        $womenExercises = json_decode($womenExercisesJson, true)['exercises'];

        // Merge the two arrays
        $allExercises = array_merge($menExercises, $womenExercises);

        // Filter the items based on the search query
        $filteredExercises = array_filter($allExercises, function($item) use ($query) {
            return stripos($item['name'], $query) !== false || stripos($item['description'], $query) !== false;
        });

        return view('items.index1', ['items' => $filteredExercises]);
    }
}