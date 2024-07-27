<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CourseAssignment;
use App\Models\AssignCourseContent;
use App\Models\AssignCourseAnnouncement;
use App\Models\CourseContentClasswork;
use App\Models\CourseClassworkFiles;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Course;
use Imagick;


class ManageCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($userID, $assignmentTableID, $courseID)
    {
        $teacherId = Auth::id();

        

        $course_code = Course::where('id',$courseID)->firstOrFail();
        $manageCourse = CourseAssignment::where('teacher_id', $teacherId)
                            ->where('id', $assignmentTableID)  // additional condition
                            ->where('course_id', $courseID)
                            ->with('course')
                            ->firstOrFail();

            

        $courseContent = AssignCourseContent::where('course_assignments_id', $assignmentTableID)
                            ->with('courseAssignment')
                            ->with('courseAnnouncements')
                            ->with('courseClasswork')
                            ->orderBy('created_at', 'desc')
                            ->get();
        $classwork_files = CourseClassworkFiles::all();
                          

                    
        $announcementsByAssignment = [];
        $classworkByAssignment = [];
        
  
    
        foreach ($courseContent as $content) {
            $contentId = $content->id;
            

            foreach ($content->courseAnnouncements as $announcement) {

                $announcementsByAssignment[$contentId][] = [
                    'content_id' => $announcement->id,
                    'content' => $announcement->announcement,
                    'type' => 'Announcement',
                    'created_at' => $announcement->created_at,
                    'updated_at' => $announcement->updated_at,
                ];
            }
            
            foreach ($content->courseClasswork as $classwork) {
                $classworkByAssignment[$contentId][] = [
                    'content_id' => $classwork->id,
                    'content' => $classwork->classwork,
                    'type' => 'Classwork',
                    'type_of_classwork' => $classwork->type,
                    'created_at' => $classwork->created_at,
                    'updated_at' => $classwork->updated_at,
                ];
            }
        }
   
        return view('teacher.courses.manage-course.index', [
            'class_code' => $course_code,
            'manageCourse' => $manageCourse, 
            'announcementsByAssignment' => $announcementsByAssignment,
            'classworkByAssignment' => $classworkByAssignment,
            'file' => $classwork_files]);
    }

    public function postAnnouncement(Request $request, $userID, $assignmentTableID, $courseID)
    {
        $request->validate([
            'content' => 'required|string', 
        ]);

        // Check if there's an existing record with null announcement_id
        // $content = AssignCourseContent::where('course_assignments_id', $assignmentTableID)
        //     ->whereNull('announcement_id')
        //     ->first();

        // if ($content) {
        //     // Update existing record with the new announcement
        //     $announcement = AssignCourseAnnouncement::create([
        //         'announcement' => $request->input('content'),
        //     ]);

        //     $content->announcement_id = $announcement->id;
        //     $content->save();
        // } else {
            // Create a new record
            $announcement = AssignCourseAnnouncement::create([
                'announcement' => $request->input('content'),
            ]);

            AssignCourseContent::create([
                'course_assignments_id' => $assignmentTableID,
                'announcement_id' => $announcement->id,
            ]);
        // }

        return redirect()->route('teacher.teacher.index', [
            'userID' => $userID,
            'assignmentTableID' => $assignmentTableID,
            'courseID' => $courseID,
        ])->with('success', 'Announcement added successfully.');
    }

    public function postClasswork(Request $request, $userID, $assignmentTableID, $courseID,)
    {
       

        $request->validate([
            'content1' => 'required|string', 
            'content2' => 'required|string',
            'files.*' => 'required|mimes:pdf,jpeg,png,jpg,gif,svg,doc,docx,xls,xlsx'
        ]);
        
       
        // // Check if there's an existing record with the assignment ID
        // $content = CourseContentClasswork::where('id', $assignmentTableID)
        //     ->whereNull('classwork')
        //     ->first();

    
        // if ($content) {
        //     // Update existing record with the new classwork
        //     $content->update([
        //         'classwork' => $request->input('content1'),
        //         'type' => $request->input('content2'),
        //     ]);
        // } else {
            // Create a new record
            $classwork = CourseContentClasswork::create([
                'classwork' => $request->input('content1'),
                'type' => $request->input('content2'),
            ]);

            $fileData = [];
            if($files=$request->file('files')){
                foreach ($files as $file) {

                    $fileNameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    

                    if (in_array($extension, ['jpeg', 'png', 'jpg', 'gif', 'svg'])) {
                        // Generate a thumbnail for image files
                        $thumbnail = Image::make($file)->resize(150, 150)->stream();
                        Storage::put('public/classwork_files/thumbnails/' . $fileNameToStore, $thumbnail->__toString());
                    } elseif ($extension == 'pdf') {
                        // Generate a thumbnail for PDF files
                        $pdf = new Imagick($file->getPathname() . '[0]'); // Get the first page
                        $pdf->setImageFormat('jpeg');
                        $pdf->thumbnailImage(150, 150, true, true);
                        Storage::put('public/classwork_files/thumbnails/' . $fileNameToStore . '.jpg', $pdf);
                    }

                    $path = $file->storeAs('public/classwork_files', $fileNameToStore);
                   
                    $fileData[] = [
                        'classwork_file' => $fileNameToStore,
                        'classwork_id' => $classwork->id,             
                    ];
                }
                
            }
            
            CourseClassworkFiles::insert($fileData);


            AssignCourseContent::create([
                'course_assignments_id' => $assignmentTableID,
                'classwork_id' => $classwork->id,
            ]);
        // }
    
        return redirect()->route('teacher.teacher.index', [
            'userID' => $userID,
            'assignmentTableID' => $assignmentTableID,
            'courseID' => $courseID,
        ])->with('success', 'Classwork added successfully.')
          ->with('courseFiles', CourseClassworkFiles::where('classwork_id', $classwork->id)->get());
    }

//    public function removeAnnouncement($userID, $assignmentTableID, $courseID, $contentID, $announcementID)
//     {

        

//         $content = AssignCourseContent::findOrFail($contentID);
//         // Update the announcement_id to null
//         $content->announcement_id = null;
//         $content->save();

//         $announcement = AssignCourseAnnouncement::findOrFail($announcementID);
//         $announcement->delete();

//         return redirect()->route('teacher.teacher.index', [
//             'userID' => $userID,
//             'assignmentTableID' => $assignmentTableID,
//             'courseID' => $courseID,
//         ])->with('success', 'Announcement removed successfully.');
//     }

public function removeAnnouncement($userID, $type, $assignmentTableID, $courseID, $contentID, $announcementID)
{
    // Determine which model to use based on $contentType ('announcement' or 'classwork')
    if ($type == 'Announcement') {
        // Delete announcement
         $announcement = AssignCourseAnnouncement::findOrFail($announcementID);
         $announcement->delete();
        
          return redirect()->route('teacher.teacher.index', [
            'userID' => $userID,
            'assignmentTableID' => $assignmentTableID,
            'courseID' => $courseID,
        ])->with('success', 'Announcement removed successfully.');
    } elseif ($type === 'Classwork'){
        $classwork = CourseContentClasswork::findOrFail($announcementID);
        $classwork->delete();
        return redirect()->route('teacher.teacher.index', [
            'userID' => $userID,
            'assignmentTableID' => $assignmentTableID,
            'courseID' => $courseID,
        ])->with('success', 'Announcement removed successfully.');
    }
}

    // public function updateAnnouncement(Request $request, $userID, $assignmentTableID, $courseID, $contentID, $announcementID)
    // {
    //     // Validate request data


    //     if ($request->input('content')) {
    //         $announcement = AssignCourseAnnouncement::findOrFail($announcementID);

    //         // Update the announcement content from the request
    //         $announcement->announcement = $request->input('content');

    //         // Save the updated announcement
    //         $announcement->save();

    //         // Redirect back with success message
    //         return redirect()->route('teacher.teacher.index', [
    //             'userID' => $userID,
    //             'assignmentTableID' => $assignmentTableID,
    //             'courseID' => $courseID,
    //         ])->with('success', 'Announcement updated successfully.');
    //     } else {
    //         return redirect()->route('teacher.teacher.index', [
    //             'userID' => $userID,
    //             'assignmentTableID' => $assignmentTableID,
    //             'courseID' => $courseID,
    //         ])->with('error', 'Unable to update.');
    //     }
    // }

    public function updateAnnouncement(Request $request, $userID, $type, $assignmentTableID, $courseID, $contentID, $announcementID)
    {
        // Validate the request
        $request->validate([
            'content' => 'required|string', // Adjust validation rules as per your needs
        ]);

        // Determine which model to use based on $contentType ('announcement' or 'classwork')
        if ($type === 'Announcement') {
            // Update announcement
            $announcement = AssignCourseAnnouncement::findOrFail($announcementID);
            $announcement->announcement = $request->input('content');
            $announcement->save();
            return redirect()->back()->with('success', 'Content updated successfully.');
        } elseif ($type === 'Classwork') {
            // Update classwork
            $classwork = CourseContentClasswork::findOrFail($announcementID);
            $classwork->classwork = $request->input('content');
            $classwork->save();
            return redirect()->back()->with('success', 'Content updated successfully.');
        }

        // Redirect back or return a response as needed
        return redirect()->back()->with('success', 'Content updated successfully.');
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
    public function show($id)
    {
        $file = CourseClassworkFiles::findOrFail($id);

        $path = storage_path("app/public/classwork_files/{$file->classwork_file}");

        if (!file_exists($path)) {
            abort(404);
        }

        $fileContent = file_get_contents($path);
        $mimeType = mime_content_type($path);

        return response($fileContent, 200)
            ->header('Content-Type', $mimeType)
            ->header('Content-Disposition', 'inline; filename="' . basename($path) . '"');
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
