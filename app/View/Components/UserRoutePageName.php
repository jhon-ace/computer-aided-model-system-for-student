<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class UserRoutePageName extends Component
{
    /**
     * The title for the current page.
     *
     * @var string
     */
    public $title;

    /**
     * Create a new component instance.
     *
     * @param string $routeName
     * @return void
     */
    public function __construct(string $routeName)
    {
        $this->setTitle($routeName);
    }

    /**
     * Set the title based on the route name.
     *
     * @param string $routeName
     * @return void
     */
    protected function setTitle(string $routeName)
    {
        if (!Auth::check()) {
            $this->title = __('Student Classroom Management System');
            return;
        }

        $titles = [
            // This is Admin Route Page Name
            'admin.dashboard' => __('Admin Dashboard'),
            
            'admin.department.index' => __('Manage Department'),
            'admin.department.create' => __('Add Department'),
            'admin.department.edit' => __('Edit Department'),

            'admin.dean.index' => __('Manage Dean'),
            'admin.dean.create' => __('Add Dean'),
            'admin.dean.edit' => __('Edit Dean'),

            'admin.program.index' => __('Manage Program'),
            'admin.program.create' => __('Add Program'),
            'admin.program.edit' => __('Edit Program'),

            'admin.course.index' => __('Manage Course'),
            'admin.course.create' => __('Add Course'),
            'admin.course.edit' => __('Edit Course'),

            'admin.teacher.index' => __('Manage Teachers'),
            'admin.teacher.create' => __('Add Teacher'),
            'admin.teacher.edit' => __('Edit Teacher'),

            'admin.profile.edit' => __('Edit Admin Profile'),

            // This is Teacher Route Page Name
            'teacher.dashboard' => __('Teacher Dashboard'),

            // Add more titles as needed
        ];

        // Set default title if route name is not found
        $this->title = $titles[$routeName] ?? __('Student Classroom Management System');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.user-route-page-name');
    }
}
