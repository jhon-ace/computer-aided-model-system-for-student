<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Requests\CourseStoreRequest;
use App\Http\Requests\CourseUpdateRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.course.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = Program::all();
        return view('admin.course.create', compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(CourseStoreRequest $request)
    {
         $course = Course::create($request->validated());
     
         $program = $course->program;
         $programName = $program ? $program->program_abbreviation : 'Not yet assigned';
     
         return redirect()->route('admin.course.index')
                          ->with('success', 'Course - '. $course->course_code . ' as part of ' . $programName . ' program added successfully.');
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
        $course = Course::findOrFail($id);
        $courses = Course::all(); // or any other relevant data source for dean statuses
        return view('admin.course.edit', compact('course', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseUpdateRequest $request, $id)
    {
        $course = Course::findOrFail($id);

        if ($request->course_code !== $course->course_code || $request->course_name!== $course->course_name 
        || $request->course_description !== $course->course_description || $request->course_semester !== $course->course_semester) 
        {
            try {
                $course->update($request->validated());
                return redirect()->route('admin.course.index')
                    ->with('success', 'Course '. $course->course_code. ' - '.$course->course_name. ' updated successfully.');
            } catch (\Illuminate\Database\QueryException $e) {
                if ($e->errorInfo[1] === 1062) { // MySQL error code for duplicate entry
                    return redirect()->route('admin.course.index')
                        ->with('error','Course - '. $course->course_code .' - ' .$course->course_name.'  exist!');
                } else {
                    // Handle other database exceptions
                    return redirect()->route('admin.course.index')
                        ->with('error', 'An error occurred while updating the course.');
                }
            }
        } else {
            return redirect()->route('admin.course.index')
                ->with('info', 'No changes were made to course ' . $course->course_code . ' - ' . $course->course_name . '.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
           
        return redirect()->route('admin.course.index')
                        ->with('success','Course deleted successfully');
    }


    public function deleteSelected(Request $request)
    {
        // Get the IDs of the selected courses
        $selectedCourses = $request->input('selected');

        if ($selectedCourses) {
            // Fetch faculties associated with the selected courses
            $facultiesInUse = Course::whereIn('id', $selectedCourses)->exists();

            // Attempt to delete courses if no faculties are associated
            try {
                Course::whereIn('id', $selectedCourses)->delete();
                $message = 'Selected course' . (count($selectedCourses) > 1 ? 's' : '') . ' have been deleted successfully.';
                return redirect()->route('admin.course.index')->with('success', $message);
            } catch (\Exception $e) {
                return redirect()->route('admin.course.index')->with('error', 'Failed to delete selected course' . (count($selectedCourses) > 1 ? 's' : '') . '.');
            }
        } else {
            return redirect()->route('admin.course.index')->with('error', 'No course selected for deletion.');
        }
    }

    public function assignCourse(Request $request, $id)
    {

        $course = Course::findOrFail($id);
    
        $teacherId = $request->input('course_thaught_id');
    
        $teacher = Teacher::findOrFail($teacherId);
        
        $newTeacher = $teacher->replicate();
        $newTeacher->course_taught_id = $course->id;
        $newTeacher->save();

        // Redirect back with a success message or to another appropriate location
        return redirect()->route('admin.course.index')->with('success', 'Course assigned to teacher successfully.');
       
    }
    


}
