<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_code' => 'required',
            'course_name' => 'required',
            'course_description' => 'nullable',
            'course_semester' => 'required|integer',
            'course_prereq' => 'required|boolean',
        ]);

        Course::create($request->all());

        return redirect('/courses');
    }
}
