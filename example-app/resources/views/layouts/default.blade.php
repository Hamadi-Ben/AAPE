
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AAPE</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: Impact, Charcoal, sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <header section= "page-header">
        <div class=Tout>
            <div class=NOM>
                <img class="fit-picture"
                    src="https://pbs.twimg.com/media/FCiYblwWYAIYI-a?format=png&name=small"
                    alt="LOGO" height='120px' width='175px'>
            <h1>| AAPE STORE |</h1>
            </div>
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" v-pre>
                            <img src='https://pbs.twimg.com/media/FEPZr9cXEAoXg6O?format=png&name=240x240' alt='co'>{{Auth::user()->name}}
                            </a>
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            <a href="{{ url('/login') }}" class="text-sm text-gray-700 underline">Log Out</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
    </header>
                <main>
                    @yield('main')
                </main>

                <footer>
                    <div class= "Links">
                    <a href="https://facebook.com" title="lien image html">
                        <img class="icon"
                        src="https://pbs.twimg.com/media/FCymcLNUUAktBzP?format=png&name=small"
                        alt="facebook">
                    </a>
                    <a href="https://twitter.com/" class="m-link">
                        <img class="icon"
                        src="https://pbs.twimg.com/media/FCymiZwUUAM0SOo?format=png&name=small"
                        alt="twitter"><a href="https://twitter.com/" class="m-link">
                    </a>
                    </div>
                    <h1> Copyright © 2021 AAPE SHIT </h3>
                </footer>
            </body>
            </html>

