<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CourseAssignment;
use App\Models\AssignCourseContent;
use App\Models\AssignCourseAnnouncement;

class ManageCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($userID, $assignmentTableID, $courseID)
    {
        $teacherId = Auth::id();

        $manageCourse = CourseAssignment::where('teacher_id', $teacherId)
                            ->where('id', $assignmentTableID)  // additional condition
                            ->where('course_id', $courseID)
                            ->with('course')
                            ->firstOrFail();

            

        $courseContent = AssignCourseContent::where('course_assignments_id', $assignmentTableID)
                            ->with('courseAssignment')
                            ->with('courseAnnouncements')
                            ->get();

        $announcements = [];

            foreach ($courseContent as $content) {
                foreach ($content->courseAnnouncements as $announcement) {
                    $announcements[] = $announcement;
                }
            }
 

                        
        return view('teacher.courses.manage-course.index', ['manageCourse' => $manageCourse, 
                                                            'announcements' => $announcements]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
