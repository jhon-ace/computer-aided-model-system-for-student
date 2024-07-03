<?php

use App\Http\Controllers\Teacher\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Teacher\Auth\RegisteredUserController;
use App\Http\Controllers\Teacher\ProfileController;
use App\Http\Controllers\Teacher\TeacherCourseController;
use App\Http\Controllers\Teacher\ManageCourseController;
use App\Http\Controllers\Teacher\ManageClassworkController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:teacher')->prefix('teacher')->name('teacher.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware(['auth:teacher', 'verified'])->prefix('teacher')->name('teacher.')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('teacher.dashboard')->with('success', 'Welcome to your dashboard!');
    })->name('dashboard');

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
