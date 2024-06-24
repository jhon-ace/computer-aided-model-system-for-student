<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageCourse extends Model
{
    use HasFactory;

    protected $table = 'manage_courses';

    protected $fillable = [
        'teacher_id',
        'course_id',

    ];

    // public function course()
    // {
    //     return $this->belongsTo(Course::class);
    // }

    // public function teacher()
    // {
    //     return $this->belongsTo(Teacher::class);
    // }

    // public function program()
    // {
    //     return $this->belongsTo(Program::class);
    // }

    // public function department()
    // {
    //     return $this->belongsTo(Department::class);
    // }
}
