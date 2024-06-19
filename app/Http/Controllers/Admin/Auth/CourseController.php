<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Program;
use App\Models\CourseAssignment;
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
        // Validate the request
        $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'section' => 'required|string|max:255',
            'days_of_the_week' => 'required|string|in:M.W,M.W.F,T.Th',
            'class_start_time' => 'required|date_format:H:i',
            'class_end_time' => 'required|date_format:H:i|after:class_start_time',
        ], [
            'teacher_id.exists' => 'The selected teacher does not exist.',
            'days_of_the_week.in' => 'Invalid days of the week selection.',
            'class_end_time.after' => 'Class end time must be after class start time.',
        ]);
    
        try {
            // Find the course
            $course = Course::findOrFail($id);
    
            // Retrieve inputs
            $teacherId = $request->input('teacher_id');
            $section = $request->input('section');
            $days_of_the_week = $request->input('days_of_the_week');
            $class_start_time = $request->input('class_start_time');
            $class_end_time = $request->input('class_end_time');
    
            // Find the teacher
            $teacher = Teacher::findOrFail($teacherId);
    
            // Create a new course assignment
            CourseAssignment::create([
                'course_id' => $course->id,
                'section' => $section,
                'days_of_the_week' => $days_of_the_week,
                'class_start_time' => $class_start_time,
                'class_end_time' => $class_end_time,
                'teacher_id' => $teacherId,
                'program_id' => $course->program_id,
                'department_id' => $course->program->department_id,
            ]);
    
            // Redirect back with a success message
            return redirect()->route('admin.course.index')->with('success', 'Course assigned to teacher successfully.');
    
        } catch (ModelNotFoundException $e) {
            // Redirect back with an error message if the course or teacher is not found
            return redirect()->back()->with('error', 'Failed to assign course. ' . $e->getMessage());
    
        } catch (\Exception $e) {
            // Redirect back with a general error message for other exceptions
            return redirect()->back()->with('error', 'Failed to assign course. ' . $e->getMessage());
        }
    }
    
        
    }
    
