<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseContentClasswork;

class CourseClassworkFiles extends Model
{
    use HasFactory;
    protected $table = 'course_classwork_files';

    protected $fillable = [
        'classwork_files_id',
        'classwork_files',
        'classwork_id',
    ];

    public function courseFiles()
    {
        return $this->hasMany(CourseContentClasswork::class);
    }
}
