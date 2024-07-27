<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Program;
use App\Models\Department;
use App\Models\AssignCourse;

class CourseAssignment extends Model
{
    use HasFactory;

    protected $table = 'course_assignments';

    protected $fillable = [
        'course_id',
        'class_code',
        'section',
        'days_of_the_week',
        'class_start_time',
        'class_end_time',
        'room',
        'teacher_id',
        'program_id',
        'department_id',

    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
        // return $this->belongsTo(Course::class);
    }

    // public function class_code()
    // {
    //     return $this->belongsTo(Course::class, 'course_id', 'id');
    // }


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }



}
