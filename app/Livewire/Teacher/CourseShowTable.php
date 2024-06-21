<?php

namespace App\Livewire\Teacher;

use \App\Models\Course; 
use \App\Models\Teacher; 
use \App\Models\CourseAssignment; 
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class CourseShowTable extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'course_id';
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

        $this->sortField = $field;
    }

    public function render()
    {
        $teacherId = Auth::id();

        // Fetch the assigned courses for the teacher
        $assignedCourses = CourseAssignment::with(['course'])
            ->where('teacher_id', $teacherId)
            ->where(function ($query) {
                $query->whereHas('course', function ($query) {
                    $query->where('course_code', 'like', '%' . $this->search . '%')
                          ->orWhere('course_name', 'like', '%' . $this->search . '%')
                          ->orWhere('course_unit', 'like', '%' . $this->search . '%');;
                })
                ->orWhere('section', 'like', '%' . $this->search . '%')
                ->orWhere('days_of_the_week', 'like', '%' . $this->search . '%')
                ->orWhere('class_start_time', 'like', '%' . $this->search . '%')
                ->orWhere('class_end_time', 'like', '%' . $this->search . '%')
                ->orWhere('room', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.teacher.course-show-table', [
            'assignedCourses' => $assignedCourses
        ]);
    }
}
