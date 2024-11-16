<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    public function showUsers($courseId)
    {
        $course = Course::with('users')->findOrFail($courseId); // Load course with users
        return view('courses.users', compact('course'));
    }
}

