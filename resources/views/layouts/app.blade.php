<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>
    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    @media (max-width: 767px) {
        .map {
            height: 200px;
        }

        .search {
            margin-top: 5px !important;
        }
    }

    @media (min-width: 768px) {
        .container {
            width: 755px;
            max-width: 755px;
        }
        .map {
            height: 300px;
        }
        .search {
            margin-top: 5px !important;
        }
    }

    @media (min-width: 992px) {
        .container {
            width: 975px;
            max-width: 975px;
        }
        .map {
        width: 380px;
        height: 98%;
        position: fixed; 
        }
    }

    @media (min-width: 1200px) {
        .container {
            width: 1175px;
            max-width: 1175px;
        }

        .map {
        width: 470px;
        height: 98%;
        position: fixed; 
        }
    }

    @media (min-width: 1500px) {
        .container {
            width: 1475px;
            max-width: 1475px;
        }
        .map {
        width: 600px;
        height: 98%;
        position: fixed; 
        }
    }

    .map img {
            width: 100%;
            height: 90%;
    }

    .top-space{
        margin-top:30px !important;
    }


    .detail-top-img {
        height:auto;
        width:100%;
    }

    .detail-top-img img{
        height:auto;
        width:100%;
    }

    .align-center{
        text-align: center;
    }
    </style>
    <!-- test wwoof -->
</head>
<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <div><img src= "/svg/freeLogo.svg" style="height:20px; border-right: 1px solid black" class="pr-3"></div>
                    <div class="pl-3">freeCodeGram</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
