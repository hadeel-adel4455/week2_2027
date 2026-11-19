<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultyDataSeeder extends Seeder
{
    public function run(): void
    {
        // Faculties
        $it = DB::table('faculties')->insertGetId([
            'name' => 'Faculty of Information Technology',
        ]);

        $engineering = DB::table('faculties')->insertGetId([
            'name' => 'Faculty of Engineering',
        ]);

        // Information Technology Departments
        $itDepartments = [
            'Computer Science',
            'Software Engineering',
            'Information Technology',
            'Computer Networks',
            'Cybersecurity',
            'Information Systems',
        ];

        foreach ($itDepartments as $department) {
            DB::table('departments')->insert([
                'faculty_id' => $it,
                'name' => $department,
            ]);
        }

        // Engineering Departments
        $engineeringDepartments = [
            'Civil Engineering',
            'Electrical Engineering',
            'Mechanical Engineering',
            'Architecture',
            'Chemical Engineering',
            'Communications Engineering',
        ];

        foreach ($engineeringDepartments as $department) {
            DB::table('departments')->insert([
                'faculty_id' => $engineering,
                'name' => $department,
            ]);
        }

        // Semesters
        $semesters = [
            'First',
            'Second',
            'Third',
            'Fourth',
            'Fifth',
            'Sixth',
            'Seventh',
            'Eighth',
        ];

        foreach ($semesters as $semester) {
            DB::table('semesters')->insert([
                'name' => $semester,
            ]);
        }
    }
}
