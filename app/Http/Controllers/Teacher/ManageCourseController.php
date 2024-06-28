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


        $announcementsByAssignment = [];

        foreach ($courseContent as $content) {
            $contentId = $content->id;

            foreach ($content->courseAnnouncements as $announcement) {
                $announcementsByAssignment[$contentId][] = [
                    'announcement_id' => $announcement->id,
                    'announcement' => $announcement->announcement,
                    'created_at' => $announcement->created_at,
                    'updated_at' => $announcement->updated_at,
                ];
            }
        }
   
        return view('teacher.courses.manage-course.index', [
            'manageCourse' => $manageCourse, 
            'announcementsByAssignment' => $announcementsByAssignment]);
    }

    public function postAnnouncement(Request $request, $userID, $assignmentTableID, $courseID)
    {
        $request->validate([
            'content' => 'required|string', 
        ]);

        // Check if there's an existing record with null announcement_id
        $content = AssignCourseContent::where('course_assignments_id', $assignmentTableID)
            ->whereNull('announcement_id')
            ->first();

        if ($content) {
            // Update existing record with the new announcement
            $announcement = AssignCourseAnnouncement::create([
                'announcement' => $request->input('content'),
            ]);

            $content->announcement_id = $announcement->id;
            $content->save();
        } else {
            // Create a new record
            $announcement = AssignCourseAnnouncement::create([
                'announcement' => $request->input('content'),
            ]);

            AssignCourseContent::create([
                'course_assignments_id' => $assignmentTableID,
                'announcement_id' => $announcement->id,
            ]);
        }

        return redirect()->route('teacher.teacher.index', [
            'userID' => $userID,
            'assignmentTableID' => $assignmentTableID,
            'courseID' => $courseID,
        ])->with('success', 'Announcement added successfully.');
    }


   public function removeAnnouncement($userID, $assignmentTableID, $courseID, $contentID, $announcementID)
    {

        

        $content = AssignCourseContent::findOrFail($contentID);
        // Update the announcement_id to null
        $content->announcement_id = null;
        $content->save();

        $announcement = AssignCourseAnnouncement::findOrFail($announcementID);
        $announcement->delete();

        return redirect()->route('teacher.teacher.index', [
            'userID' => $userID,
            'assignmentTableID' => $assignmentTableID,
            'courseID' => $courseID,
        ])->with('success', 'Announcement removed successfully.');
    }

    public function updateAnnouncement(Request $request, $userID, $assignmentTableID, $courseID, $contentID, $announcementID)
    {
        // Validate request data


        if ($request->input('content')) {
            $announcement = AssignCourseAnnouncement::findOrFail($announcementID);

            // Update the announcement content from the request
            $announcement->announcement = $request->input('content');

            // Save the updated announcement
            $announcement->save();

            // Redirect back with success message
            return redirect()->route('teacher.teacher.index', [
                'userID' => $userID,
                'assignmentTableID' => $assignmentTableID,
                'courseID' => $courseID,
            ])->with('success', 'Announcement updated successfully.');
        } else {
            return redirect()->route('teacher.teacher.index', [
                'userID' => $userID,
                'assignmentTableID' => $assignmentTableID,
                'courseID' => $courseID,
            ])->with('error', 'Unable to update.');
        }
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
