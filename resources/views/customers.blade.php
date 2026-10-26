@extends('layouts.app')

@section('content')
    <h2>Customer Accounts</h2>

    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer['name'] }} — {{ $customer['email'] }}</li>
        @endforeach
    </ul>
@endsection