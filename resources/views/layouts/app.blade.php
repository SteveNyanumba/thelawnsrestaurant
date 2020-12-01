<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div id="nos-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#0e2749"/>
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1f7738"/>
            </svg>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark nos_navbar bg-dark nos-navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="/images/logo.png" width="100px" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nos-nav" aria-controls="nos-nav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="oi oi-menu"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="nos-nav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if(Request::is('/')) active @endif"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item @if(Request::is('menu')) active @endif"><a href="/menu" class="nav-link ">Menu</a></li>
                    <li class="nav-item @if(Request::is('services')) active @endif"><a href="/services" class="nav-link">Services</a></li>
                    <li class="nav-item @if(Request::is('events')) active @endif"><a href="/events" class="nav-link">Events</a></li>
                    <li class="nav-item @if(Request::is('contact-us')) active @endif"><a href="/contact-us" class="nav-link">Contact Us</a></li>
                </ul>
                  <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item @if(Request::is('login')) active @endif">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item  @if(Request::is('register')) active @endif">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->isAdmin)
                            <a class="dropdown-item" href="/admin">
                                    Dashboard
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>

                </div>
                </div>
            </nav>

            <main class="@if(Request::is('login') || Request::is('register')) my-5 nos-my @endif">
                @yield('content')
            </main>
        </div>

        @if (!(Request::is('login') || Request::is('register')))
            @include('templates.footer')
        @endif
        <!-- Scripts -->
        <script src="{{ asset('frontend/js/main.js') }}" defer></script>
    </body>
    </html>
