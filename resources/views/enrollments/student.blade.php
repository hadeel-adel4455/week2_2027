<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Courses</title>
    @vite(['resources/css/app.css'])
</head>
<body>

    <div class="enrollment-section">

        <h2>Student Information</h2>

        <div class="student">
            <p><strong>Student Number:</strong> {{ $student->stuno }}</p>

            <p><strong>Student Name:</strong> {{ $student->stname }}</p>

            <p><strong>Faculty:</strong> {{ $student->faclutly }}</p>

            <p><strong>Department:</strong> {{ $student->department }}</p>

            <p><strong>Semester:</strong> {{ $student->semster }}</p>
        </div>

        <h2>Enrolled Courses</h2>

        @forelse ($student->courses as $course)

            <div class="student">
                <h3>{{ $course->course_name }}</h3>
                <p>Course Code: {{ $course->course_code }}</p>
            </div>

        @empty

            <p>This student is not enrolled in any course.</p>

        @endforelse

        <a href="{{ route('enrollments.create') }}">
            Back to Enrollment
        </a>

    </div>

</body>
</html>
```