@extends('layouts.app')

@section('content')
    <h1>Profile of {{ $user->name }}</h1>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Bio:</strong> {{ $user->profile->bio }}</p>
    <p><strong>School:</strong> {{ $user->profile->school}}</p>

@endsection
