<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
</head>
<body>
    <section class="flex flex-col h-screen">
        <header class="flex bg-red-200 justify-between items-center p-4">
            <h1 class="font-bold text-2xl">Takie-Takie</h1>
            <nav>
                <ul class="flex gap-2 uppercase">
                    <li><a href="{{ url ('/') }}">Home</a></li>
                    <li><a href="{{ url('tasks') }}">Tasks</a></li>
                </ul>
            </nav>
        </header>
        <main class="p-4 flex-grow">
            @yield('content')
        </main>
        <footer class="p-4 bg-gray-50">
            <p>&copy; {{ date('Y') }} Your Website</p>
        </footer>
    </section>


</body>
</html>
