<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseAssignment;
use Illuminate\Support\Facades\Auth;

class TeacherCourseController extends Controller
{
    public function index()
    {
        // Retrieve the authenticated teacher's ID
        $teacherId = Auth::id();
    
        // Log the retrieved teacher ID to Laravel's default log file (storage/logs/laravel.log)
        \Log::info("Authenticated Teacher ID: $teacherId");
    
        // Retrieve the authenticated teacher's assigned courses
        $assignedCoursesNav = CourseAssignment::where('teacher_id', $teacherId)
                            ->with('course') // Assuming you have a 'course' relationship in CourseAssignment
                            ->get();
    
        return view('teacher.courses.index', compact('assignedCoursesNav'));
    }
    
}
