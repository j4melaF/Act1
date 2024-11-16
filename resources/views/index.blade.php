@extends('layouts.app')

@section('content')
    <h1>User Profiles</h1>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Profile Info</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profiles as $profile)
                <tr>
                    <td>{{ $profile->user->id }}</td>
                    <td>{{ $profile->user->name }}</td>
                    <td>{{ $profile->user->email }}</td>
                    <td>{{ $profile->bio }}</td> <!-- assuming bio is a column in Profile table -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
