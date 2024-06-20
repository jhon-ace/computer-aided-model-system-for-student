<?php

namespace App\Livewire;

use \App\Models\Teacher; 
use \App\Models\Course; 
use \App\Models\CourseAssignment; 
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class TeacherShowTable extends Component
{
    use WithPagination;

    public $deleteAllClicked = false;
    public $search = '';
    public $sortField = 'name';
    public $sortDirection = 'asc';

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

        $this->sortField = $field;
    }

    public function getCoursesByTeacher($teacherId)
    {
        // Fetch courses assigned to the given teacher
        return CourseAssignment::where('teacher_id', $teacherId)
            ->with('course')
            ->get();
    }

    public function showCourseTotalCount($teacherId)
    {
        return DB::table('course_assignments')
        ->where('teacher_id', $teacherId)
        ->count('course_id');
    }

    public function showCourseUnitTotal($teacherId)
    {
        return CourseAssignment::where('teacher_id', $teacherId)
            ->join('courses', 'course_assignments.course_id', '=', 'courses.id')
            ->sum('courses.course_unit');
    }

    public function render()
    {
        $teachers = Teacher::with('department')
            ->where(function (Builder $query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('email', 'like', '%' . $this->search . '%')
                      ->orWhere('status', 'like', '%' . $this->search . '%')
                      ->orWhereHas('department', function (Builder $query) {
                          $query->where('department_name', 'like', '%' . $this->search . '%');
                      });
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        // Fetch courses for each teacher
        foreach ($teachers as $teacher) {
            $teacher->courses = $this->getCoursesByTeacher($teacher->id);
            $teacher->courseTotal = $this->showCourseTotalCount($teacher->id);
            $teacher->totalUnits = $this->showCourseUnitTotal($teacher->id);
        }

        $courses = Course::all();

        return view('livewire.teacher-show-table', [
            'teachers' => $teachers,
            'courses' => $courses,

        ]);
    }
}
