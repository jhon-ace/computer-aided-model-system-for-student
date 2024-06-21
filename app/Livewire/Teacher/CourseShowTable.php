<?php

namespace App\Livewire\Teacher;

use \App\Models\Course; 
use \App\Models\Teacher; 
use \App\Models\CourseAssignment; 
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseShowTable extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'courses.course_code';
    public $sortDirection = 'desc';
    public $deleteAllClicked = false;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        // Update sortField based on the field being clicked
        switch ($field) {
            case 'course_code':
            case 'course_name':
            case 'course_unit':
                $this->sortField = 'courses.' . $field;
                break;
            default:
                $this->sortField = $field;
                break;
        }
    }

    public function showCourseTotalCount($teacherId)
    {
        return CourseAssignment::where('teacher_id', $teacherId)->count();
    }

    public function showCourseUnitTotal($teacherId)
    {
        return CourseAssignment::where('teacher_id', $teacherId)
            ->join('courses', 'course_assignments.course_id', '=', 'courses.id')
            ->sum('courses.course_unit');
    }

    public function render()
    {
        $teacherId = Auth::id();

        // Fetch the assigned courses for the teacher with sorting and search filters
        $assignedCourses = CourseAssignment::with(['course' => function ($query) {
                $query->select('id', 'course_code', 'course_name', 'course_unit'); // Select only necessary fields from Course model
            }])
            ->leftJoin('courses', 'course_assignments.course_id', '=', 'courses.id') // Join with courses table
            ->where('teacher_id', $teacherId)
            ->where(function ($query) {
                $query->where('course_code', 'like', '%' . $this->search . '%')
                      ->orWhere('course_name', 'like', '%' . $this->search . '%')
                      ->orWhere('course_unit', 'like', '%' . $this->search . '%')
                      ->orWhere('section', 'like', '%' . $this->search . '%')
                      ->orWhere('days_of_the_week', 'like', '%' . $this->search . '%')
                      ->orWhere('class_start_time', 'like', '%' . $this->search . '%')
                      ->orWhere('class_end_time', 'like', '%' . $this->search . '%')
                      ->orWhere('room', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->select('course_assignments.*') // Select all fields from course_assignments table
            ->paginate(10);


                    // Fetch courses for each teacher
         // Fetch courses for the teacher
         $teacher = Teacher::find($teacherId);
         $teacher->courseTotal = $this->showCourseTotalCount($teacherId);
         $teacher->totalUnits = $this->showCourseUnitTotal($teacherId);


        return view('livewire.teacher.course-show-table', [
            'assignedCourses' => $assignedCourses,
            'teacher' => $teacher,
        ]);
    }
}
