<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" type="image/ico" href="{{ asset('favicon.ico') }}">
    <title>Книгоман</title>
    <link rel="stylesheet" href="{{ asset('static/fancy/jquery.fancybox.min.css') }}">
    @vite([
        'resources/scss/app.scss',
        'resources/js/app.js'
    ])
</head>
<body>
<div id="wrapper">
    <div class="container">

        <header>
            <div class="name_area">
                <a href="/" id="logo"><img src="{{ asset('static/images/logo.svg') }}" alt=""></a>
                <div class="name">Книгоман</div>
            </div>
            <div class="user_area">
                @guest
                    <a href="#" class="auth cpp" data-pp="auth">Аутентификация</a> /
                    <a href="{{ route('user.reg') }}" class="reg">Регистрация</a>
                @endguest
                @auth
                    <div class="row c1">
                        <span>Вы: </span><a href="{{ route('user.private') }}">{{ Auth::user()->name }}</a> /
                        <a href="{{ route('user.logout') }}">Выход</a>
                    </div>
                    @if(Auth::user()->is_admin)
                    <div class="row c2">
                        <a href="{{ route('admin.index') }}">админка</a>
                    </div>
                    @endif
                @endauth
            </div>
        </header>

        <h1>@yield('title')</h1>
        @yield('content')

    </div>
</div>
<footer>
    <div class="container">&copy <?= date('Y') ?> Книгоман</div>
</footer>

<div class="overlay" style="display: none;">
    <div class="popup">
        <div class="close"></div>
        <div class="inner">

            <div class="auth" style="display: none;">
                <h2>Аутентификация</h2>
                @include('user.inc.auth')
            </div>

        </div>
    </div>
</div>

<script src="{{ asset('static/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('static/fancy/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('static/custom.js') }}"></script>
</body>
</html>
