<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Ремонт, ">
    <title>  @yield('title')</title>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }} >
    @yield('label-css')
</head>

<body>
    <header>
        <nav>
            <img class="logo" src="img/LOGO.png" alt="no_logo">
            <div class="main-links">
                <a href="/">Главная</a>
                <a href="/#price">Цена</a>
                <a href="/#examples">Наши работы</a>
            </div>
            <div class="aside">
                <!-- Если пользователь гость -->
            @if(!Auth::user())
                <a href="/login">Вход</a>
                <p class="logindevider">|</p>
                <a href="register">Регистрация</a>
            @endif

            <!-- Если пользователь авторизован -->
            @if(Auth::user())

                @switch(Auth::user()->name)
                    @case('Админ')
                    <a href="/admin">Админка</a>
                    @break
                    
                    @default
                    <a href="/dashboard">Личный кабинет</a>
                @endswitch

                <p class="logindevider">|</p>
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Выход') }}
                            </x-dropdown-link>
                        </form>

            @endif
            </div>
        </nav>
    </header>
    <div style="height: 120px; opacity: 0;"></div>
    <main>
        @yield('main')
    </main>
    <footer>
        <div class="footer-content">
            <h1>Компания «Reparation»</h1>
            <span>тел. 8 (999) 222 11 33
            </span>
            <p>Все права защищены. Использование материалов сайта <br>разрешено только с согласия правообладателей.</p>
            <p>©2022г.</p>
        </div>
    </footer>

</body>

</html>