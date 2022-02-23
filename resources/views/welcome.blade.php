<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ mix('css/app.css', 'build') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
@if (Route::has('login'))
    <div class="flex justify-end py-4 px-6">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif
<div id="app">
    <div class="mt-8">
        <modal1></modal1>
        <div class="mt-16 mx-12">
            <just-get-json title="Get response with axios"></just-get-json>
        </div>
    </div>
</div>
<script src="{{ mix('js/app.js', 'build') }}"></script>
</body>
</html>
