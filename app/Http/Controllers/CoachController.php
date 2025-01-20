<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;
use App\Models\coatch;

class CoachController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $coaches = Coach::where('name', 'like', '%' . $search . '%')
                ->paginate(6);
        } else {
            $coaches = Coach::paginate(6);
        }
        return view('coaches.index', compact('coaches'));
    }

    public function create()
    {
        return view('coaches.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        Coach::create($request->all());

        $name=$request->input('name');
        $description=$request->input('description');
        $image=$request->file('image')->getClientOriginalName();


        $coach = new Coach();

        $coach->name=$name;
        $coach->description=$description;
        $coach->image=$image;

        $coach->save();
        $request->file('image')->move(public_path('images'), $image);

        return redirect()->route('coaches.index');
    }

    public function edit($id)
    {
        $coach = Coach::findOrFail($id);
        return view('coaches.edit', compact('coach'));
    }


    public function update(Request $request, $id)
{
    // Validate the request
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $coach = Coach::findOrFail($id);

    $coach->name = $request->name;
    $coach->description = $request->description;

    if($request->hasFile('image')) {
        $image=$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images'), $image);

    }else{
        $image= $coach->image;
    }
    $coach->image=$image;

    $coach->save();

    return redirect()->route('coaches.index');
}


    public function destroy($id)
    {
        $coach = Coach::findOrFail($id); // Update to use the correct model name
        $coach->delete();
        return redirect()->route('coaches.index'); // Correct the route name
    }
}
