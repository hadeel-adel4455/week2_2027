@extends('layouts.app')

@section('title', 'Create Student')

@section('content')

<div class="form-card">

    <h2>Add New Student</h2>
    <p>Enter the student information below.</p>

    <form action="/students" method="POST">
        @csrf

        <label>Student Number</label>
        <input type="text" name="stuno"
               placeholder="Enter student number" required>

        <label>Student Name</label>
        <input type="text" name="stname"
               placeholder="Enter student name" required>

        <label>Faculty</label>
        <select name="faclutly" id="faculty" required>
            <option value="">Choose Faculty</option>

            @foreach ($faculties as $faculty)
                <option value="{{ $faculty->name }}"
                        data-id="{{ $faculty->id }}">
                    {{ $faculty->name }}
                </option>
            @endforeach
        </select>

        <label>Department</label>
        <select name="department" id="department" required>
            <option value="">Choose Department</option>

            @foreach ($departments as $department)
                <option value="{{ $department->name }}"
                        data-faculty-id="{{ $department->faculty_id }}">
                    {{ $department->name }}
                </option>
            @endforeach
        </select>

        <label>Semester</label>
        <select name="semster" required>
            <option value="">Choose Semester</option>

            @foreach ($semesters as $semester)
                <option value="{{ $semester->name }}">
                    {{ $semester->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Save Student</button>

        <a href="/students" class="cancel-btn">Cancel</a>

    </form>

</div>

<script>
    const facultySelect = document.getElementById('faculty');
    const departmentSelect = document.getElementById('department');

    facultySelect.addEventListener('change', function () {

        const facultyId = this.options[this.selectedIndex].dataset.id;

        departmentSelect.innerHTML =
            '<option value="">Choose Department</option>';

        @foreach ($departments as $department)
            if (facultyId == '{{ $department->faculty_id }}') {
                const option = document.createElement('option');

                option.value = @json($department->name);
                option.textContent = @json($department->name);

                departmentSelect.appendChild(option);
            }
        @endforeach
    });
</script>

@endsection
