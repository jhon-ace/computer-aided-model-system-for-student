<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CourseAssignment;

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
                        
        return view('teacher.courses.manage-course.index', ['manageCourse' => $manageCourse]);
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
