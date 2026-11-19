<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stuinf;
use App\Models\Course;

class EnrollmentController extends Controller
{
    public function index()
    {
        $courses = Course::with('students')->get();

        return view('enrollments.index', compact('courses'));
    }

    public function create()
    {
        $students = Stuinf::all();
        $courses = Course::all();
        $enrollments = Course::with('students')->get();

        return view('enrollments.create', compact(
            'students',
            'courses',
            'enrollments'
        ));
    }

    public function store(Request $request)
{
    $course = Course::findOrFail($request->course_id);

    $course->students()->syncWithoutDetaching(
        $request->student_ids
    );

    return redirect()->route('enrollments.create')
        ->withFragment('enrolled-table');
}
    public function studentCourses($id)
    {
        $student = Stuinf::with('courses')->findOrFail($id);

        return view('enrollments.student', compact('student'));
    }
}
