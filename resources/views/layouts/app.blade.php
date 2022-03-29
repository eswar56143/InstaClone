<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="bg-light">
    <div id="app">
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div><img src="/svg/Insta.svg" class="nav-logo">
                    </div>
                    <div class="nav-heading">Insta</div>
                </a>
                @guest()
                    <div class="nav-items">
                        @if (Route::has('login'))
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif

                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </div>
                @else
                    <div class="search">
                        <input type="text" placeholder="search" >
                    </div>
                    <div class="nav-items">
                        <a class="nav-links" href="{{ url('/') }}">
                            <i class="fa fa-house icons fa-icon"></i>
                        </a>
                        <a href="#" class="nav-links">
                            <i class="fa-brands fa-facebook-messenger"></i>
                        </a>
                        <a href="/p/create" class="nav-links">
                            <i class="fa-regular fa-square-plus"></i>
                        </a>
                        <a class="nav-links" href="{{ url('/explore/people') }}">
                            <i class="fa-regular fa-compass fa-icon"></i>
                        </a>
                        <a href="#" class="nav-links">
                            <i class="fa-regular fa-heart"></i>
                        </a>
                        <div class="dropdown">
                            <img src="{{Auth::user()->profile->profileImage()}}" alt="hi"
                                 class="rounded-circle"  style="max-height: 30px" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                 aria-expanded="true">
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <a href="/profile/{{Auth::user()->id}}" class="dropdown-item mb-2"><i class="fa-regular fa-circle-user"></i> <span>Profile</span></a>
                                <a class="dropdown-item border-top mt-1" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      class="d-none">
                                @csrf
                            </div>
                        </div>

                    </div>
                @endguest
            </div>
        </nav>

        <main class=" bg-light">
            @yield('content')
        </main>
    </div>
</body>
</html>
