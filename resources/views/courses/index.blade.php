@extends('layouts.app')

@section('title', 'Courses')

@section('content')

<div class="page-heading">
    <h1>Courses Management</h1>
    <p>Explore all available courses and their information.</p>
</div>

<div class="courses-section">

    <div class="section-header">
    <h2>Courses List</h2>

    <a href="/courses/create" class="btn">
        + Add New Course
    </a>
</div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Course Description</th>
                    <th>Course Semester</th>
                    <th>Course Prerequisite</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->course_code }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->course_description }}</td>
                    <td>{{ $course->course_semester }}</td>
                    <td>{{ $course->course_prereq ? 'Yes' : 'No' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">No courses available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection
