@extends('layouts.app')

@section('content')
    <h1>Users Enrolled in {{ $course->name }}</h1>
    <ul>
        @foreach ($course->users as $user)
            <li>{{ $user->name }} - {{ $user->email }}</li>
        @endforeach
    </ul>
@endsection
