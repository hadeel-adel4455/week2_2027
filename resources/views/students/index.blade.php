@extends('layouts.app')

@section('title', 'Students')

@section('content')

<div class="page-heading">
    <h1>Students Management</h1>
    <p>Search and manage student information.</p>
</div>

<div class="form-card">
    <h2>Search Student</h2>

    <form action="{{ route('students.index') }}" method="GET">

        <label>Student Name</label>

        <input type="text"
               name="search"
               placeholder="Enter student name..."
               value="{{ request('search') }}">

        <div class="form-actions">
            <button type="submit">Search</button>
        </div>

    </form>
</div>

<div class="students-section">

    <div class="section-header">
        <h2>Students List</h2>

        <a href="/students/create" class="btn">
            + Add New Student
        </a>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Number</th>
                    <th>Name</th>
                    <th>Faculty</th>
                    <th>Department</th>
                    <th>Semester</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($student as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->stuno }}</td>
                    <td>{{ $item->stname }}</td>
                    <td>{{ $item->faclutly }}</td>
                    <td>{{ $item->department }}</td>
                    <td>{{ $item->semster }}</td>
<td>
    <a href="/students/{{ $item->id }}/edit" class="btn">
        Edit
    </a>

    <form action="{{ route('students.destroy', $item->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>
</td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">No students found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
