<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        Course::create([
            'title' => 'Web Development',
            'description' => 'Learn HTML, CSS and Laravel',
            'instructor' => 'Ahmed Ali',
            'duration' => 30,
        ]);

        Course::create([
            'title' => 'PHP Programming',
            'description' => 'Learn PHP programming basics',
            'instructor' => 'Sara Mohamed',
            'duration' => 20,
        ]);
    }
}