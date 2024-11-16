<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function showProfile($userId)
    {
        $user = User::with('profile')->findOrFail($userId); // Load user with profile
        return view('users.profile', compact('user'));
    }

    public function showCourses($userId)
    {
        $user = User::with('courses')->findOrFail($userId); // Load user with courses
        return view('users.courses', compact('user'));
    }
}
