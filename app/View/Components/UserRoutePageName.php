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
     * The course name for the current page.
     *
     * @var string|null
     */
    public $courseDetails;

    /**
     * Create a new component instance.
     *
     * @param string $routeName
     * @return void
     */
    public function __construct(string $routeName, array $courseDetails = [])
    {
        $this->courseDetails = $courseDetails;
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
            'teacher.dashboard' => __('Teacher | Dashboard'),
            'teacher.teacher-courses' => __('My Courses'),

            //Teacher Manage Courses page name
            'teacher.teacher.index' => __(':courseName'),

            // Add more titles as needed
        ];

        // Set default title if route name is not found
        $this->title = $titles[$routeName] ?? __('Student Classroom Management System');

        // Replace the placeholder with the actual course name, if provided
        if (isset($this->courseDetails['course_name'])) {
            $this->title = str_replace(':courseName', $this->courseDetails['course_name'], $this->title);
        }

         // Append section with line break if available
        if (isset($this->courseDetails['section'])) {
            $this->title .= ' | ' . $this->courseDetails['section'];
        }
        // Append time, days_of_the_week, and section if available
        if (isset($this->courseDetails['time'])) {
            $this->title .= ' - ' . $this->courseDetails['time'];
        }
        if (isset($this->courseDetails['days_of_the_week'])) {
            $this->title .= ' - ' . $this->courseDetails['days_of_the_week'];
        }

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
