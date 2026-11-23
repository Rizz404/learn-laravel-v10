<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Laravel · Rizz404</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="site-nav">
        <div class="container nav-inner">
            <a class="brand" href="{{route('home')}}"><span class="brand-mark">L</span> Learn Laravel</a>
            <div class="nav-links">
                <a class="{{request()->is('/') ? 'active' : ''}}" href="{{route('home')}}">Overview</a>
                <a class="{{request()->is('product') ? 'active' : ''}}" href="{{route('product')}}">Product view</a>
                <a class="{{request()->is('keranjang') ? 'active' : ''}}" href="{{route('keranjang')}}">Cart view</a>
                <a class="{{request()->is('login') ? 'active' : ''}}" href="{{url('/login')}}">Login view</a>
            </div>
            <a class="github" href="https://github.com/Rizz404/learn-laravel-v10">GitHub ↗</a>
        </div>
    </nav>
    <main class="container">{{$content}}</main>
    <footer class="container footer">
        <span>Rizqiansyah Ramadhan / Rizz404</span>
        <span>Laravel 10 · PHP · Blade</span>
    </footer>
</body>
</html>
