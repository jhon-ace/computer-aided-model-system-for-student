<?php

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\Auth\DepartmentController;
use App\Http\Controllers\Admin\Auth\DeanController;
use App\Http\Controllers\Admin\Auth\ProgramController;
use App\Http\Controllers\Admin\Auth\CourseController;
use App\Http\Controllers\Admin\Auth\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\Auth\TeacherCourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('student.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('classwork_files/thumbnails/{filename}', [FileController::class, 'showThumbnail'])->name('thumbnails.show');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

Route::middleware('auth')->group(function () {
   
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {

    // Department Routes
    Route::resource('department', DepartmentController::class)->names([
        'index' => 'department.index',
        'create' => 'department.create',
        'store' => 'department.store',
        'edit' => 'department.edit',
        'update' => 'department.update'
    ]);
    Route::delete('deparment', [DepartmentController::class, 'deleteSelected'])->name('department.deleteSelected');

    // Dean Routes
    Route::resource('dean', DeanController::class)->names([
        'index' => 'dean.index',
        'create' => 'dean.create',
        'store' => 'dean.store',
        'edit' => 'dean.edit',
        'update' => 'dean.update'
    ]);
    Route::delete('dean', [DeanController::class, 'deleteSelected'])->name('dean.deleteSelected');

    // Program Routes
    Route::resource('program', ProgramController::class)->names([
        'index' => 'program.index',
        'create' => 'program.create',
        'store' => 'program.store',
        'edit' => 'program.edit',
        'update' => 'program.update'
    ]);
    Route::delete('program', [ProgramController::class, 'deleteSelected'])->name('program.deleteSelected');

// Course Routes
    Route::resource('course', CourseController::class)->names([
        'index' => 'course.index',
        'create' => 'course.create',
        'store' => 'course.store',
        'edit' => 'course.edit',
        'update' => 'course.update',
        'destroy' => 'course.destroy',
    ]);
    Route::delete('/admin/courses/delete-selected/{id}', [CourseController::class, 'deleteSelected'])->name('course.deleteSelected');
    Route::delete('/admin/courses/delete-all', [CourseController::class, 'deleteAll'])->name('course.deleteAll');
    Route::post('course-assign-teacher/{id}', [CourseController::class, 'assignCourse'])->name('course.assignCourse'); // Updated route name

// Teacher Routes
    Route::resource('teacher', TeacherController::class)->names([
        'index' => 'teacher.index',
        'create' => 'teacher.create',
        'store' => 'teacher.store',
        'edit' => 'teacher.edit',
        'update' => 'teacher.update',
    ]);
    Route::delete('teacher', [TeacherController::class, 'deleteSelected'])->name('teacher.deleteSelected');
    Route::delete('/admin/teacher/deleteAssignCourse/{teacher_id}/{id}', [TeacherController::class, 'deleteAssignCourse'])->name('teacher.deleteAssignCourse');
  //  Route::get('teacher-course/id={id}', [TeacherController::class, 'assignCourse'])->name('teacher.assignCourse');

});

Route::middleware(['auth:web', 'verified'])->prefix('web')->name('student.')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('student.dashboard')->with('success', 'Welcome to your dashboard!');
    })->name('dashboard');
    Route::get('web/dashboard', [StudentController::class, 'index'])->name('student.dashboard');

    //Teacher-assign courses controller
    Route::get('/my-courses', [TeacherCourseController::class, 'class_load'])->name('teachercourses.index');
    // ManageCourse for Teacher
    Route::get('/manage-course/{userID}/{assignmentTableID}/{courseID}', [ManageCourseController::class, 'index'])
    ->name('teacher.index');
    Route::post('/post-announcement/{userID}/{assignmentTableID}/{courseID}', [ManageCourseController::class, 'postAnnouncement'])
    ->name('teacher.postAnnouncement');// add announcement
   
    Route::put('/remove-announcement/{userID}/{type}/{assignmentTableID}/{courseID}/{contentID}/{announcementID}', [ManageCourseController::class, 'removeAnnouncement'])
    ->name('teacher.removeAnnouncement');//remove announcement
    Route::put('/update-announcement/{userID}/{type}/{assignmentTableID}/{courseID}/{contentID}/{announcementID}', [ManageCourseController::class, 'updateAnnouncement'])
    ->name('teacher.updateAnnouncement'); //update announcement

    //     Classwork Routes
    // Route::resource('classwork/{userID}/{assignmentTableID}/{courseID}', ManageClassworkController::class)->names([
    //     'index' => 'classwork.index',
    //     'create' => 'classwork.create',
    //     'store' => 'classwork.store',
    //     'edit' => 'classwork.edit',
    //     'update' => 'classwork.update'
    // ]);

    Route::get('/manage-classwork/{userID}/{assignmentTableID}/{courseID}', [ManageClassworkController::class, 'index'])
    ->name('classwork.index');

    Route::post('/post-classwork/{userID}/{assignmentTableID}/{courseID}', [ManageCourseController::class, 'postClasswork'])
    ->name('teacher.postClasswork');// add classwork
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});





require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
require __DIR__.'/teacher-auth.php';
