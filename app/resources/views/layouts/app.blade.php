<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Alumnis Simplon</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <script src="{{ secure_asset('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/simple-sidebar.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
                    Alumnis Simplon
                </a>
                <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <li>
                            <a class="nav-link text-white mr-3 font-weight-bold" href="{{ route('post_index') }}">Articles</a>
                        </li>
                        <li>
                            <a class="nav-link text-white mr-3 font-weight-bold" href="">Annonces</a>
                        </li>
                        <li>
                            <a class="nav-link text-white mr-3 font-weight-bold" href="{{ route('user_show') }}">Annuaire</a>
                        </li>
                        <li>
                            <a class="nav-link text-white font-weight-bold" href="">Alumnis fondation</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                           
                            <li class="nav-item">
                                <a class="text-white" title="Déconnexion" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-2x"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="sidebar col-3 sticky-top text-white text-center">
                    <div class="divbloc"></div>
                    <div class="divside">
                        <h2 class="pt-4 mb-3">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h2>
                        <h3>{{ Auth::user()->promo }}</h3>
                        <hr class="mt-4 mb-5">
                        <a type="button" class="btn btn-dark mb-3 btnSize">Mon Profil</a><br>
                        <a type="button" class="btn btn-dark mb-3 btnSize">Mes Articles</a><br>
                        <a type="button" class="btn btn-dark mb-3 btnSize">Mes Favoris</a><br>
                        <a type="button" class="btn btn-dark mb-3 btnSize" href="{{ route('post_create') }}">Nouvel Article</a><br>
                        <a type="button" class="btn btn-dark mb-3 btnSize">Nouvelle Annonce</a><br>
                    </div>
                </div>
                <!-- mobile left side -->
                <div class="mobilSide text-center" id="sidebar-wrapper">
                    <div class="divbloc"></div>
                    <div class="divside">
                        <h2 class="pt-4 mb-3">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h2>
                        <h3>{{ Auth::user()->promo }}</h3>
                        <a type="button" class="btn btn-dark mb-3 btnSize" href="">Mon Profil</a><br>
                        <a type="button" class="btn btn-dark mb-3 btnSize" href="">Mes Articles</a><br>
                        <a type="button" class="btn btn-dark mb-3 btnSize" href="">Mes Favoris</a><br>
                        <a type="button" class="btn btn-dark mb-3 btnSize" href="{{ route('post_create') }}">Nouvel Article</a><br>
                        <a type="button" class="btn btn-dark mb-3 btnSize" href="">Nouvelle Annonce</a><br>
                    </div>
                </div>

                <main class="col-sm-12 col-md-9" id="page-content-wrapper">
                    @yield('content')
                </main>
            </div>
        </div> 
    </div>
</body>
</html>
