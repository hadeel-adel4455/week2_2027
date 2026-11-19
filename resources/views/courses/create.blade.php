@extends('layouts.app')

@section('title', 'Add Course')

@section('content')

<div class="page-heading">
    <h1>Add New Course</h1>
    <p>Enter the course information below.</p>
</div>

<div class="form-card">

    <h2>Course Information</h2>

    <form action="/courses" method="POST">
        @csrf

        <label>Course Code</label>
        <input type="text" name="course_code" placeholder="Enter course code" required>

        <label>Course Name</label>
        <input type="text" name="course_name" placeholder="Enter course name" required>

        <label>Course Description</label>
        <textarea name="course_description" placeholder="Enter course description"></textarea>

        <label>Course Semester</label>
        <select name="course_semester" required>
            <option value="">Select Semester</option>
            <option value="1">First</option>
            <option value="2">Second</option>
            <option value="3">Third</option>
            <option value="4">Fourth</option>
            <option value="5">Fifth</option>
            <option value="6">Sixth</option>
            <option value="7">Seventh</option>
            <option value="8">Eighth</option>
        </select>

        <label>Course Prerequisite</label>
        <select name="course_prereq" required>
            <option value="">Select Yes or No</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>

        <div class="form-actions">
            <button type="submit">Save Course</button>
            <a href="/courses" class="btn">Cancel</a>
        </div>

    </form>

</div>

@endsection
