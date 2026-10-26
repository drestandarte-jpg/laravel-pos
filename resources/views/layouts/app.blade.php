<!DOCTYPE html>
<html>
<head>
    <title>POS Foundations</title>
</head>
<body>
    <h1>POS Foundations</h1>

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers') }}">Customers</a> |
        <a href="{{ route('users') }}">Users</a>
    </nav>

    <hr>

    @yield('content')
</body>
</html>