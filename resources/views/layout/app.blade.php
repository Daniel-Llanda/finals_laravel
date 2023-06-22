<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{route('home')}}">HOME</a>
            <a href="{{route('profile')}}">PROFILE</a>
            <a href="{{route('event')}}">EVENT</a>
            @if(auth()->check())
                <a href="{{route('logout')}}">LOG OUT</a>
            @else
                <a href="{{route('login')}}">LOG IN</a>
                <a href="{{route('register')}}">REGISTRATION</a>
            @endif
            
        </nav>
    </header>

    @yield('content')
    
</body>
</html>