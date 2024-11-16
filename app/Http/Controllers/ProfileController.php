<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::with('user')->get(); // Load all profiles with their associated user details
        return view('profiles.index', compact('profiles'));
    }
}
