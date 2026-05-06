<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Englishvit Clone</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/jpeg" href="{{ asset('english_logos.jpeg') }}">
</head>
<body class="overflow-x-hidden bg-white text-slate-900 antialiased">
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
