@extends('layouts.app')

@section('content')
    <h2>User Accounts</h2>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user['name'] }} — {{ $user['role'] }}</li>
        @endforeach
    </ul>
@endsection