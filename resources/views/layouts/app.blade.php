<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">


    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}"> 

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="bg-white">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                @guest
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('/images/app_logo.png') }}" alt="icon" class="logo">
                    </a>
                @else
                    <a class="navbar-brand" href="{{ url('/homepage') }}">
                        <img src="{{ asset('/images/app_logo.png') }}" alt="icon" class="logo">
                    </a>
                @endguest
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::currentRouteName() == 'login')
                                <li class="nav-item">
                                    <a class="nav-link me-4" href="{{ route('user-guide.register')}}">User Guide</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @elseif (Route::currentRouteName() == 'register' || Route::currentRouteName() == 'password.request' || Route::currentRouteName() == 'password.reset' || Route::currentRouteName() == 'password.reset.success')
                                <li class="nav-item">
                                    <a class="nav-link me-4" href="{{ route('user-guide.register')}}">User Guide</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @elseif (Route::currentRouteName() == 'contact' || Route::currentRouteName() == 'index' || Route::currentRouteName() == 'guide1')
                                <li class="nav-item">
                                    <a class="nav-link me-4" href="{{ route('user-guide.register')}}">User Guide</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item me-4">
                                <a href="{{ route('item.add') }}" class="nav-link">
                                    + Add item
                                </a>
                            </li>

                            <li class="nav-item me-4">
                                <a href="{{ route('donated.items.index') }}" class="nav-link">
                                    Donation
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if (Auth::user()->avatar)
                                       <img src="{{ $user->avatar }}" alt="{{ $user->avatar }}" class="rounded-circle avatar-sm">
                                    @else
                                       <i class="fa-solid fa-circle-user text-dark icon"></i>
                                    @endif
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end text-center navbar-list" aria-labelledby="navbarDropdown">
                                    <li><a href="{{ route('profile.show',Auth::user()->id) }}">Profile</a></li>

                                    <li><a href="{{ route('user-guide.register')}}">User Guide</a></li>

                                    <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    @if (Route::currentRouteName() != 'contact')
        @guest
            <footer>
                <ul class="footer-menu">
                    <li class="footer-item list-unstyled">
                        <a class="footer-link text-decoration-none text-white me-5" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </footer>
        @endguest
    @endif

    <script src="path/to/bootstrap.js"></script>
</body>
</html>
