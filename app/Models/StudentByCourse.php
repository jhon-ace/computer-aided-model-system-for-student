<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\courseAssignment;
use App\Models\user;

class StudentByCourse extends Model
{
    use HasFactory;
    protected $table = 'students_by_courses';

    protected $fillable = [    
        'student_id',
        'course_id',
        'course_assignment_id',
    ];

    public function courseStudent()
    {
        return $this->hasMany(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class,'course_id', 'id');
    }

    public function courseAssignment()
    {
        return $this->belongsTo(courseAssignment::class, 'course_assignment_id', 'id');
        // return $this->belongsTo(Course::class);
    }
}
