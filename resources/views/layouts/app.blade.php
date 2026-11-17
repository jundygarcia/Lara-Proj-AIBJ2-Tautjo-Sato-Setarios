<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kape Karon')</title>

    {{-- Shared styles --}}
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    {{-- Page-specific styles --}}
    @stack('styles')
</head>
<body>

    <nav class="navbar">
        <a href="/" class="brand">Kape Karon</a>
        <ul class="nav-links">
            <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} Kape Karon</p>
        <p>Made by: Jundy Tautjo, Mirai Sato, Gio Setarios</p>
    </footer>

    {{-- Page-specific scripts --}}
    @stack('scripts')
</body>
</html>