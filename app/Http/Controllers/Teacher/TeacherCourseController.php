<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseAssignment;
use Illuminate\Support\Facades\Auth;

class TeacherCourseController extends Controller
{
    public function class_load()
    {

        $teacherId = Auth::id();
    
        $assignedCoursesNav = CourseAssignment::where('teacher_id', $teacherId)
                            ->with('course') 
                            ->get();
    
        return view('teacher.courses.course_load', compact('assignedCoursesNav'));
    }
    
}
