<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stuinf extends Model
{
    protected $table = 'stuinf';

    public function courses()
    {
        return $this->belongsToMany(
            Course::class,
            'course_student',
            'student_id',
            'course_id'
        );
    }
}