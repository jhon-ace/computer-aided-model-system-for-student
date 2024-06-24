<?php

namespace App\Livewire\Teacher;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\CourseAssignment;

class ManageCourses extends Component
{

    public function render()
    {
        // $teacherId = Auth::id();

        // $manageCourse = CourseAssignment::where('teacher_id', $teacherId)
        //                     ->where('course_id', $courseToManage)
        //                     ->with('course')
        //                     ->firstOrFail();

        return view('livewire.teacher.manage-courses');
    }
}
