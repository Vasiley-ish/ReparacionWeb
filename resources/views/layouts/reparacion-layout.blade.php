<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Ремонт, ">
    <title>  @yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/filter_landing.css">
</head>

<body>
    <header>
        <nav>
            <img class="logo" src="img/LOGO.png" alt="no_logo">
            <div class="main-links">
                <a href="#">Главная</a>
                <a href="#price">Цена</a>
                <a href="#examples">Наши работы</a>
            </div>
            <div class="aside">
                <a href="#">Вход</a>
                <p class="logindevider">|</p>
                <a href="#">Регистрация</a>
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