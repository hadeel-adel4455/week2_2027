<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment</title>
    @vite(['resources/css/app.css'])
</head>
<body class="enrollment-page">

    <div class="enrollment-section">

        <h2>Enroll Students in Course</h2>

        <form action="{{ route('enrollments.store') }}" method="POST">
            @csrf

            <label>Select Course:</label>

            <select name="course_id" required>
                <option value="">Select Course</option>

                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">
                        {{ $course->course_name }}
                    </option>
                @endforeach
            </select>

            <h3>Select Students:</h3>

            @foreach ($students as $student)
                <div class="student">
                    <label>
                        <input
                            type="checkbox"
                            name="student_ids[]"
                            value="{{ $student->id }}"
                        >
                        {{ $student->stname }}
                    </label>
                </div>
            @endforeach

            <br>

            <button type="submit">
                Add Students
            </button>

        </form>

        <hr>

        <h2 id="enrolled-table">Enrolled Students</h2>

        <table border="1" width="100%" cellpadding="10">

            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Student Number</th>
                    <th>Student Name</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($enrollments as $course)

                    @forelse ($course->students as $student)

                        <tr>
                            @if ($loop->first)
                                <td rowspan="{{ $course->students->count() }}">
                                    {{ $course->course_name }}
                                </td>
                            @endif

                            <td>{{ $student->stuno }}</td>
                            <td>{{ $student->stname }}</td>
                        </tr>

                    @empty

                        <tr>
                            <td>{{ $course->course_name }}</td>
                            <td colspan="2">No students enrolled</td>
                        </tr>

                    @endforelse

                @endforeach

            </tbody>

        </table>

        <br>

        <a href="{{ route('enrollments.index') }}">
            View All Enrollments
        </a>

    </div>

</body>
</html>
