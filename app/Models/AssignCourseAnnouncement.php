<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssignCourseContent;

class AssignCourseAnnouncement extends Model
{
    use HasFactory;

    protected $table = 'course_content_announcement';

    protected $fillable = [
        'announcement',
    ];

    public function courseContent()
    {
        return $this->belongsTo(AssignCourseContent::class);
    }
   
}
