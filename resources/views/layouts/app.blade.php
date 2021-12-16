<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;500;600;700&display=swap" rel="stylesheet">


</head>
<body>
<div class="head">
    <header>
        <a href="{{ url('/') }}">
            <img src="./img/logo.png" alt="logo_header" />
            <img src="./img/cinefeel_typo.png" alt="logo"/>
        </a>
    </header>

    <div class="logo">

    </div>
    <!-- Authentication Links -->
    <nav>
        @guest
            <div class="log">
                <a href="{{ route('login') }}">Se connecter</a>
                <a href="{{ route('register') }}">S'enregistrer</a>
            </div>
        @else
            <div class="log">
                <p> Bonjour {{ Auth::user()->name }} - <a href="{{ route('series') }}">Mon profil</a></p>
            <!--
            @if (Auth::user())
                <a href="#">Des liens spécifiques pour utilisateurs connectés..</a>
            @endif
                    -->
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Déconnexion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        @endguest
    </nav>
</div>

<div id="main">
    @yield('content')
</div>
<!-- Scripts -->
</body>
</html>
