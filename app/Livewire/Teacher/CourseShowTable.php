<?php

namespace App\Livewire\Teacher;

use \App\Models\Course; 
use \App\Models\Teacher; 
use \App\Models\CourseAssignment; 
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class CourseShowTable extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'course_code';
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
        
            $assignedCourses = CourseAssignment::with(['course'])
            ->where(function (Builder $query) {
                $query->where('course_code', 'like', '%' . $this->search . '%')
                    ->orWhere('course_name', 'like', '%' . $this->search . '%')
                    ->orWhere('course_description', 'like', '%' . $this->search . '%')
                    ->orWhere('course_semester', 'like', '%' . $this->search . '%')
                    ->orWhereHas('program', function (Builder $query) {
                        $query->where('program_abbreviation', 'like', '%' . $this->search . '%');
                    });
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);



        return view('livewire.teacher.course-show-table', [
            'assignedCourse' => $assignedCourses,

        ]);

    }
}
