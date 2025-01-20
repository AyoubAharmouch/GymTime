<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\Course;

class CourseController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');

    $query = Course::query();

    if ($search) {
        $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('instructor', 'like', '%' . $search . '%');
    }

    $courses = $query->paginate(8); // Toujours paginer les résultats

    return view('courses.index', compact('courses', 'search'));
}


    public function adminindex(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $courses = Course::where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->orWhere('instructor', 'like', '%' . $search . '%')
                ->get();
        } else {
            $courses = Course::paginate(8);
        }

        return view('courses.adminindex', compact('courses', 'search'));
    }



public function cataloguepdf(){

    $products = Course::all();;
    $data = [
        'courses' => $products,
    ];

    $pdf =Pdf::loadView('courses.pdf',$data);
        return $pdf->stream();
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $course->update($request->all());

        return redirect('/Allcourses')->with('success', 'Course updated successfully.');
    }
}
