<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <p>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('advert') }}">Anuncios</a>

        @auth
            <a href="{{ route('logout') }}">Logout</a>
            <a href="{{ route('profile.edit') }}">Profile</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </p>
    <br>

    @yield('content')

</body>
</html>