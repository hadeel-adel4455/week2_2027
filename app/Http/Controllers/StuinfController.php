<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Stuinf;

class StuinfController extends Controller
{
   public function index(Request $request)
{
    if ($request->filled('search')) {
        $student = Stuinf::where('stname', 'LIKE', '%' . $request->search . '%')->get();
    } else {
        $student = Stuinf::all();
    }

    return view('students.index', compact('student'));
}

    public function create()
    {
        $faculties = DB::table('faculties')->get();
        $departments = DB::table('departments')->get();
        $semesters = DB::table('semesters')->get();

        return view('students.create', compact(
            'faculties',
            'departments',
            'semesters'
        ));
    }

    public function store(Request $request)
    {
        $student = new Stuinf();

        $student->stuno = $request->stuno;
        $student->stname = $request->stname;
        $student->faclutly = $request->faclutly;
        $student->department = $request->department;
        $student->semster = $request->semster;

        $student->save();

        return redirect('/students');
    }

    public function destroy($id)
    {
        $student = Stuinf::findOrFail($id);
        $student->delete();

        return redirect('/students');
    }

   public function edit($id)
{
    $student = Stuinf::findOrFail($id);
    $faculties = DB::table('faculties')->get();
    $departments = DB::table('departments')->get();
    $semesters = DB::table('semesters')->get();
    return view('students.edit', compact(
        'student',
        'faculties',
        'departments',
        'semesters'
    ));
}

    public function update(Request $request, $id)
    {
        $student = Stuinf::findOrFail($id);
        $student->stuno = $request->stuno;
        $student->stname = $request->stname;
        $student->faclutly = $request->faclutly;
        $student->department = $request->department;
        $student->semster = $request->semster;

        $student->save();
        return redirect('/students');
    }
}
