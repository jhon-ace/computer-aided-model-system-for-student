<?php

use App\Http\Controllers\Teacher\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Teacher\Auth\RegisteredUserController;
use App\Http\Controllers\Teacher\ProfileController;
use App\Http\Controllers\Teacher\TeacherCourseController;
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
        return view('teacher.dashboard');
    })->name('dashboard');

    //Teacher-assign courses controller
    Route::get('/my-courses', [TeacherCourseController::class, 'index'])->name('teacher-courses.index');
    



    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
