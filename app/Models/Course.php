<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_code',
        'course_name',
        'course_description',
        'course_semester',
        'course_prereq',
    ];

    public function students()
    {
        return $this->belongsToMany(Stuinf::class, 'course_student', 'course_id', 'student_id');
    }
}