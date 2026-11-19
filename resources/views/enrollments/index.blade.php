<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrolled Students</title>

    @vite(['resources/css/app.css'])
</head>
<body>

    <div class="enrollment-section">

        <h2>Courses and Enrolled Students</h2>

        @foreach ($courses as $course)

            <div class="student">

                <h3>{{ $course->course_name }}</h3>

                <h4>Enrolled Students:</h4>

                @forelse ($course->students as $student)

                    <p>
                        <a href="{{ route('enrollments.student', $student->id) }}">
                            {{ $student->stno }} - {{ $student->stname }}
                        </a>
                    </p>

                @empty

                    <p>No students enrolled in this course.</p>

                @endforelse

            </div>

        @endforeach

        <a href="{{ route('enrollments.create') }}">
            Back to Enrollment
        </a>

    </div>

</body>
</html>
```