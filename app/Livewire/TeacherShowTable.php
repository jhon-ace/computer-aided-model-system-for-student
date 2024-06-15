<?php

namespace App\Livewire;

use \App\Models\Teacher; 
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

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

    public function render()
    {

        $teachers = Teacher::with(['course', 'department'])
        ->where(function (Builder $query) {
            $query->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%')
                  ->orWhere('status', 'like', '%' . $this->search . '%')
                  ->orWhereHas('course', function (Builder $query) {
                      $query->where('course_code', 'like', '%' . $this->search . '%');
                  })
                  ->orWhereHas('department', function (Builder $query) {
                      $query->where('department_name', 'like', '%' . $this->search . '%');
                  });
        })
        ->orderBy($this->sortField, $this->sortDirection)
        ->paginate(10);
    
    return view('livewire.teacher-show-table', [
        'teachers' => $teachers,
    ]);
    
    
    }
}
