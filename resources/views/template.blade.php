<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4">
            <div class="flex items-center flex-grow gab-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/monkey.png') }}" alt="logo" class="h-12">
                </a>
                <form action="">
                    <input type="text" placeholder="Buscar">
                </form>
            </div>
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

        </header>
        <div class="opacity-60 h-px mb-8" style="
            background: linear-gradient(to right,
            rgba(200, 200, 200, 0) 0%,
            rgba(200, 200, 200, 1) 30%,
            rgba(200, 200, 200, 1) 70%,
            rgba(200, 200, 200, 0) 100%
            );
            ">
        </div>

        @yield('content')
        <p class="py-16">
            <img src="{{ asset('images/monkey.png') }}" alt="logo" class="h-10 mx-auto">
        </p>
    </div>
</body>
</html>