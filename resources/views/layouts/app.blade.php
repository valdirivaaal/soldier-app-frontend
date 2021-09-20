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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .number-detail {
            font-size: 2.5rem;
        }
        .geo-text {
            margin-bottom: 0 !important;
            font-size: 0.95rem;
        }
        .geo-card-body {
            min-height: 7.5rem !important;
            padding: 1rem !important;
        }
        .dotted {
            height: 1rem;
            width: 1rem;
            border-radius: 50%;
            display: inline-flex;
        }
        .dotted.maroon {
            background-color: #9c092b;
        }
        .dotted.green {
            background-color: #149c2f;
        }
        .dotted.red {
            background-color: #f0071e;
        }
        .dotted.yellow {
            background-color: #ede907;
        }
        .dotted.blue {
            background-color: #0e72c9;
        }
        .card-body.custom-min-height {
            min-height: 16rem !important;
        }
        #soldier-list>li {
            cursor: pointer;
        }
        .bg-blue-custom {
            background-color: #142341 !important;
        }

        #soldier-chart {
            height: 78%;
            width: 90%;
            position: absolute;
        }

        /* Set the size of the div element that contains the map */
        #mapid {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }

        .res-height-1 {
            height: calc((100vh - 31px - 24px - 24px - 24px)/3);
        }
        .res-height-2{
            height: calc(((100vh - 31px - 24px - 24px - 24px)/3) + ((100vh - 31px - 24px - 24px - 24px)/3));
        }

        .list-group-scroll {
            overflow-y: auto;
            max-height: 25rem !important;
            min-height: 21.7rem !important;
        }

        .mh-25 {
            min-height: 25rem !important;
            max-height: 25rem !important;
        }

        .mh-50 {
            min-height: 51rem !important;
            max-height: 51rem !important;
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-blue-custom shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>
</html>
