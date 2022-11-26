<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<<<<<<< HEAD
=======

>>>>>>> 83d4ba49c7e907fb23706b37793d00372a8a3725
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
<<<<<<< HEAD
    <script src="{{ asset('js/app.js') }}" defer></script>
=======
    @yield('header_scripts')
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

>>>>>>> 83d4ba49c7e907fb23706b37793d00372a8a3725

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<<<<<<< HEAD
</head>
=======
    <link href="{{ asset('webapp.css') }}" rel="stylesheet">
</head>

>>>>>>> 83d4ba49c7e907fb23706b37793d00372a8a3725
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
<<<<<<< HEAD
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
=======
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <div class="navbar-nav">
                        <div class="img_cont"></div>
                    </div>


                    <a href="#modal" class="modal_button" id="modalbtn">記録・投稿</a>

                    <!-- Right Side Of Navbar -->
                    <div class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
>>>>>>> 83d4ba49c7e907fb23706b37793d00372a8a3725
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
<<<<<<< HEAD
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
=======
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
>>>>>>> 83d4ba49c7e907fb23706b37793d00372a8a3725
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
<<<<<<< HEAD
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
=======
                                        onclick="event.preventDefadivt();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
>>>>>>> 83d4ba49c7e907fb23706b37793d00372a8a3725
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
<<<<<<< HEAD
                    </ul>
=======
                    </div>
>>>>>>> 83d4ba49c7e907fb23706b37793d00372a8a3725
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<<<<<<< HEAD
</body>
=======

    @yield('body_scripts')
</body>

>>>>>>> 83d4ba49c7e907fb23706b37793d00372a8a3725
</html>
