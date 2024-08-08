<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- Fonts and CSS -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-guide.css') }}"> 
    @yield('css')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-white">
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/homepage') }}">
                    <img src="{{ asset('/images/app_logo.png') }}" alt="icon" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto  mb-2">
                        <li class="nav-item">
                            <a class="nav-link me-4" href="{{ route('user-guide.register')}}">User Guide</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-3 mt-5">
                            @include('user-guide.partials.sidebar') <!-- User Guide Sidebar -->
                        </div>
                        <div class="col-8 content-border mt-4">
                            @yield('content') <!-- Content specific to each page -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <ul class="footer-menu">
            <li class="footer-item list-unstyled">
                <a class="footer-link text-decoration-none text-white me-5" href="{{ route('contact') }}">Contact Us</a>
            </li>
        </ul>
    </footer>

    <script src="path/to/bootstrap.js"></script>
</body>
</html>
