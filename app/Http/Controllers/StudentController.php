<?php

namespace App\Http\Controllers;


use App\Models\CourseAssignment;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    
    public function index()
    {
        $user= Auth::id();


        $courseAssignments = CourseAssignment::with('course')
            ->with('teacher')
            ->get();
            
        $teachers = Teacher::all();

        $teacherAssigned = [];
        // foreach ($courseAssignments as $content) {
        //     $contentId = $content->id;
        //     foreach ($content->teacher as $teachers) {

        //        if ($teachers->id === $content->teacher_id) {
        //         $teacherAssigned[$contentId][] =[
        //             'teacher_id'=> $teachers->id,
        //             'teacher' => $teachers->name,
        //         ]; 
        //     }
        //     }
        // }


        // Prepare chart data
        $courseData = [
            'labels' => ['1ST', '2ND'], // School years
            'data' => [
                $courseAssignments->count(), // Example data
                0, // Placeholder for future data
                0, // Placeholder for future data
                0  // Placeholder for future data
            ]
        ];

        // Pass the data to the view
        // return view('student.dashboard', compact('user', 'courseAssignments', 'teachers', 'courseData'));
        return view('student.dashboard', [
            'user' => $user,
            'courseAssignments' => $courseAssignments, 
            'teachers' => $teachers,
            'courseData' => $courseData]);
    }
}
