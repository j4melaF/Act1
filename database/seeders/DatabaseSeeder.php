<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Course;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Profile::factory(10)->create();
        Course::factory(10)->create();

        foreach (User::all() as $user) 
        {
            $course = Course::inRandomOrder()->limit(rand(2,7))->pluck('id');
            $user->courses()->sync($course);

        }
    }
}
