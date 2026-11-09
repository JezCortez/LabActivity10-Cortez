<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Bakuna Tracker')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-neutral-50 text-neutral-800 antialiased">
    <header class="border-b bg-white">
        <nav class="mx-auto max-w-5xl px-4 py-3 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <a href="/dashboard" class="font-semibold tracking-tight">Bakuna Tracker</a>
            <div class="flex items-center gap-4 text-sm text-neutral-600">
                @auth
                    <a href="/dashboard" class="hover:text-neutral-900">Dashboard</a>
                    <a href="/schedule" class="hover:text-neutral-900">Schedule</a>
                    <span>Hi, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button class="underline hover:text-neutral-900">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="hover:text-neutral-900">Sign in</a>
                @endguest
            </div>
        </nav>
    </header>

    <main class="mx-auto w-full max-w-5xl flex-1 px-4 py-8">
        @yield('content')
    </main>

    <footer class="border-t py-4 text-center text-xs text-neutral-500">
        Barangay Matina Crossing Health Center · Davao City
    </footer>
</body>
</html>
