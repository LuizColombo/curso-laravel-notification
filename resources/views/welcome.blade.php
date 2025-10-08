<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts via Vite -->
    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js'
    ])
</head>

<body class="bg-light text-dark d-flex flex-column min-vh-100 p-3">
    <header class="w-100 mb-4">
        @if (Route::has('login'))
            <nav class="d-flex justify-content-end gap-2">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
<div class="d-flex justify-content-center w-100">
    <main class="d-flex flex-column-reverse flex-lg-row w-100" style="max-width: 1200px;">
        <div class="flex-fill p-4 p-lg-5 bg-white text-dark rounded shadow mb-4 mb-lg-0">
            <h1 class="mb-2">Let's get started</h1>
            <p class="mb-3 text-muted">
                Laravel has an incredibly rich ecosystem.<br>
                We suggest starting with the following.
            </p>

            <ul class="list-unstyled mb-4">
                <li class="d-flex align-items-start mb-2">
                    <div class="me-3 mt-1">
                        <span class="d-inline-block rounded-circle border border-secondary bg-light" style="width: 14px; height: 14px;"></span>
                    </div>
                    <div>
                        Read the 
                        <a href="https://laravel.com/docs" target="_blank" class="text-danger text-decoration-underline">
                            Documentation
                        </a>
                    </div>
                </li>
                <li class="d-flex align-items-start">
                    <div class="me-3 mt-1">
                        <span class="d-inline-block rounded-circle border border-secondary bg-light" style="width: 14px; height: 14px;"></span>
                    </div>
                    <div>
                        Watch video tutorials at 
                        <a href="https://laracasts.com" target="_blank" class="text-danger text-decoration-underline">
                            Laracasts
                        </a>
                    </div>
                </li>
            </ul>

            <a href="https://cloud.laravel.com" target="_blank" class="btn btn-dark">
                Deploy now
            </a>
        </div>

                
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
