<?php

namespace App\Livewire;

use \App\Models\Teacher; 
use \App\Models\Course; 
use \App\Models\Department; 
use \App\Models\Program; 
use \App\Models\CourseAssignment; 

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class CourseAssignShowTable extends Component
{

    use WithPagination;

    public $search = '';
    public $sortField = 'course_id';
    public $sortDirection = 'asc';
    public $teacherId;

    protected $queryString = ['search'];

    public function mount($teacherId = null)
    {
        $this->teacherId = $teacherId;
    }

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
        $courses_assign = CourseAssignment::with(['course', 'teacher', 'program', 'department'])
            ->where('teacher_id', $this->teacherId) // Filter by teacherId
            ->where(function (Builder $query) {
                $query->whereHas('course', function (Builder $query) {
                    $query->where('course_code', 'like', '%' . $this->search . '%')
                        ->orWhere('course_name', 'like', '%' . $this->search . '%');
                })
                ->orWhere('section', 'like', '%' . $this->search . '%')
                ->orWhere('days_of_the_week', 'like', '%' . $this->search . '%')
                ->orWhere('class_start_time', 'like', '%' . $this->search . '%')
                ->orWhere('class_end_time', 'like', '%' . $this->search . '%')
                ->orWhere(function (Builder $query) {
                    $query->whereHas('program', function (Builder $query) {
                        $query->where('program_abbreviation', 'like', '%' . $this->search . '%')
                            ->orWhere('program_description', 'like', '%' . $this->search . '%');
                    });
                })
                ->orWhere(function (Builder $query) {
                    $query->whereHas('department', function (Builder $query) {
                        $query->where('department_name', 'like', '%' . $this->search . '%');
                    });
                });
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.course-assign-show-table', [
            'courses_assign' => $courses_assign,
        ]);
    }

    

    
}
