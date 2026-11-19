@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')

<div class="form-card">

    <h2>Edit Student</h2>
    <p>Update the student information below.</p>

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Student Number</label>
        <input type="text" name="stuno"
               value="{{ $student->stuno }}" required>

        <label>Student Name</label>
        <input type="text" name="stname"
               value="{{ $student->stname }}" required>

        <label>Faculty</label>
        <select name="faclutly" id="faculty" required>
            @foreach ($faculties as $faculty)
                <option value="{{ $faculty->name }}"
                    data-id="{{ $faculty->id }}"
                    {{ $student->faclutly == $faculty->name ? 'selected' : '' }}>
                    {{ $faculty->name }}
                </option>
            @endforeach
        </select>

        <label>Department</label>
        <select name="department" id="department" required>
            @foreach ($departments as $department)
                <option value="{{ $department->name }}"
                    data-faculty-id="{{ $department->faculty_id }}"
                    {{ $student->department == $department->name ? 'selected' : '' }}>
                    {{ $department->name }}
                </option>
            @endforeach
        </select>

        <label>Semester</label>
        <select name="semster" required>
            @foreach ($semesters as $semester)
                <option value="{{ $semester->name }}"
                    {{ $student->semster == $semester->name ? 'selected' : '' }}>
                    {{ $semester->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Save Changes</button>

        <a href="/students" class="cancel-btn">Cancel</a>

    </form>

</div>

<script>
    const facultySelect = document.getElementById('faculty');
    const departmentSelect = document.getElementById('department');

    function filterDepartments() {
        const facultyId =
            facultySelect.options[facultySelect.selectedIndex].dataset.id;

        Array.from(departmentSelect.options).forEach(option => {
            if (!option.value) return;

            option.hidden = option.dataset.facultyId !== facultyId;
        });

        const selectedDepartment =
            departmentSelect.options[departmentSelect.selectedIndex];

        if (selectedDepartment && selectedDepartment.hidden) {
            departmentSelect.value = '';
        }
    }

    facultySelect.addEventListener('change', filterDepartments);

    filterDepartments();
</script>

@endsection
