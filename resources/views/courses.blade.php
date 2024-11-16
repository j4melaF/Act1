@extends('layouts.app')

@section('content')
    <h1>Courses for {{ $user->name }}</h1>
    <ul>
        @foreach ($user->courses as $course)
            <li>{{ $course->name }}</li>
        @endforeach
    </ul>
@endsection
