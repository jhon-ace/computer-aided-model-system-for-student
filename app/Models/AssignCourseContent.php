<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseAssignment;
use App\Models\AssignCourseAnnouncement;

class AssignCourseContent extends Model
{
    use HasFactory;

    protected $table = 'course_assignments_content';

    protected $fillable = [
        'course_assignments_id',
        'announcement_id',
    ];

    public function courseAssignment()
    {
        return $this->belongsTo(CourseAssignment::class , 'course_assignments_id', 'id');
    }

    public function courseAnnouncements()
    {
        return $this->hasMany(AssignCourseAnnouncement::class, 'id', 'announcement_id');
    }

}

