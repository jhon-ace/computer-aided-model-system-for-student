<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Program;
use App\Models\CourseAssignment;
use App\Models\StudentByCourse;
class Course extends Model
{
    use HasFactory;
    
    protected $fillable = [
        
        'course_code',
        'class_code',
        'course_name',
        'course_description',
        'course_unit',
        'course_semester',
        'program_id',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function teachers()
    {
        return $this->belongsTo(Program::class);
    }

    public function studentByCourse()
    {
        return $this->belongsTo(studentByCourse::class);
    }

    public function courseAssignments()
    {
        return $this->hasMany(CourseAssignment::class, 'course_assignment_id', 'id');
    }
}
