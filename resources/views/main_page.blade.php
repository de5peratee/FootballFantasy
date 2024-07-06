<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Fantasy</title>

    @vite(['resources/css/main.css'])
    @vite(['resources/css/page.css'])
    @vite(['resources/css/tournaments-list.css'])
</head>
<body>
    @include('aside_menu')
    <div class="content">
        <h1 class="visually-hidden">All tournaments</h1>
        <header class="header">
            <div class="header__controls centring-wrapper">
                <button class="burger" data-action="show-modal" data-modal-id="aside-menu">
                    <span class="burger__decor"></span>
                </button>  
                <a class="header__logo-link" href="/main_page">
                    <img class="header__logo"
                        src={{asset('images/mini-logo.svg')}}
                        alt="football fantasy logo"
                        width="39" height="39" loading="lazy"
                    />
                </a>   
            </div>
            <h2 class="header__title clip-text">Главная</h2>   
            <time class="header__timer">11:48</time>
        </header>
        <a href="/logout" style="font-size: 100px; ">Разлогиниться</a>
    </div>

    @vite('resources/js/modal-menu.js')
    @vite('resources/js/hidden-controls.js')
</body>
</html>