<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssignCourseContent;
use App\Models\CourseClassworkFiles;

class CourseContentClasswork extends Model
{
    use HasFactory;

    protected $table = 'course_content_classwork';

    protected $fillable = [
        'classwork_id',
        'classwork',
        'type',
    ];

    public function courseContent()
    {
        return $this->belongsTo(AssignCourseContent::class);
    }

    public function courseFiles()
    {
        return $this->belongsTo(CourseClassworkFiles::class);
    }
    
}
