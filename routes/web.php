<?php

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\Auth\DepartmentController;
use App\Http\Controllers\Admin\Auth\DeanController;
use App\Http\Controllers\Admin\Auth\ProgramController;
use App\Http\Controllers\Admin\Auth\CourseController;
use App\Http\Controllers\Admin\Auth\TeacherController;
use App\Http\Controllers\Admin\Auth\TeacherCourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
    ]);
    Route::delete('course', [CourseController::class, 'deleteSelected'])->name('course.deleteSelected');

// Teacher Routes
    Route::resource('teacher', TeacherController::class)->names([
        'index' => 'teacher.index',
        'create' => 'teacher.create',
        'store' => 'teacher.store',
        'edit' => 'teacher.edit',
        'update' => 'teacher.update',
    ]);
    Route::delete('teacher', [TeacherController::class, 'deleteSelected'])->name('teacher.deleteSelected');
    
  //  Route::get('teacher-course/id={id}', [TeacherController::class, 'assignCourse'])->name('teacher.assignCourse');
    
});

require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
require __DIR__.'/teacher-auth.php';
