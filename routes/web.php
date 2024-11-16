<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/users/{user}/profile', [UserController::class, 'showProfile'])->name('users.profile');
Route::get('/users/{user}/courses', [UserController::class, 'showCourses'])->name('users.courses');
Route::get('/courses/{course}/users', [CourseController::class, 'showUsers'])->name('courses.users');