<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="{{ asset('favicon.ico') }}">
    <title>Книгоман</title>
    @vite([
        'resources/scss/admin.scss',
        'resources/js/app.js'
    ])
</head>
<body>
<div id="wrapper">
    <div class="container">

        <header>
            <nav>
                <a href="{{ route('index') }}">Сайт</a>
                <a href="{{ route('admin.book') }}">Книги</a>
                <a href="{{ route('admin.author') }}">Авторы</a>
                <a href="{{ route('admin.category') }}">Категории</a>
                <a href="{{ route('admin.user') }}">Пользователи</a>
            </nav>

            <div class="user_area">
                Вы: <a href="{{ route('user.private') }}">{{ Auth::user()->name }}</a> / <a href="{{ route('user.logout') }}">Выход</a>
            </div>

        </header>

        <h1>@yield('title')</h1>
        @yield('content')

    </div>
</div>
<footer>
    <div class="container">&copy <?= date('Y') ?> Книгоман</div>
</footer>
</body>
</html>
