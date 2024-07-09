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
        <h1 class="visually-hidden">Все турниры</h1>
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
            <h2 class="header__title clip-text">Лето 2024</h2>   
            <time class="header__timer">11:48</time>
        </header>
        <main class="main">
            <section class="banner">
                <h2 class="banner__title">Лето <br/>2024</h2>
                <div class="banner__content">
                    <button class="button--light banner__button">
                        Войти по ссылке
                    </button>
                    <time class="banner__start-time" datetime="2024-07-05">5 июнь 2024</time>
                </div>
            </section>
            <header class="content-header content-header__group">
                <h2 class="content-header__title">Турниры</h2>
                <div class="content-header__group">
                    <ul class="content-header__type-list">
                        <li class="content-header__type active">Текущие турниры</li>
                        <li class="content-header__type">Мои турниры</li>
                    </ul>
                    <div class="search-box">
                        <label class="visually-hidden" for="search">Поиск турнира</label>
                        <input class="content-header__search input" type="search" id="search" name="search" placeholder="Найти"/>
                        <button class="content-header__search-controls search-box__controls"></button>
                    </div>
                </div>
            </header>
            <section class="tournaments">
                <h2 class="visually-hidden">Список турниров</h2>
                <ul class="tournaments__list">
                    <li class="tournaments__item tournament" data-control-container>
                        <div class="tournament__title-wrapper tournament__item-wrapper">
                            <h3 class="tournament__title clip-text">
                                Название турнираnlisnscdvsdbvabdkjvbadfbasd,kvnkjbkjb
                            </h3>
                            <a class="tournament__link" href="/tournament" data-hidden-control>
                                Перейти
                            </a>
                        </div>
                        <div class="tournament__item-wrapper tournament__author">
                            <span class="clip-text"><span class="tournament__thin-text">Создатель:</span>&nbsp<span class="tournament__author">@nicknamea;ljfoiowajfijeoifjwoijjfiaejflieliufienfliue liuaffl iaelfih il ffaihf liua f f</span></span>
                        </div>
                        <div class="tournament__item-wrapper">
                            <time class="tournament__start-time" datetime="2024-07-08 15:30">08.07.2024 <span class="tournament__thin-text">15:30</span></time>
                        </div>
                        <div class="tournament__item-wrapper">
                            <span class="tournament__thin-text">До начала</span>&nbsp<time class="tournament__timestamp"> 1д 8ч 15м 30с</time>
                        </div>
                    </li>
                    
                    <li class="tournaments__item tournament" data-control-container>
                        <div class="tournament__title-wrapper tournament__item-wrapper">
                            <h3 class="tournament__title clip-text">
                                Название турнираnlisnscdvsdbvabdkjvbadfbasd,kvnkjbkjb
                            </h3>
                            <a class="tournament__link" href="/tournament" data-hidden-control>
                                Перейти
                            </a>
                        </div>
                        <div class="tournament__item-wrapper tournament__author">
                            <span class="clip-text"><span class="tournament__thin-text">Создатель:</span>&nbsp<span class="tournament__author">@nicknamea;ljfoiowajfijeoifjwoijjfiaejflieliufienfliue liuaffl iaelfih il ffaihf liua f f</span></span>
                        </div>
                        <div class="tournament__item-wrapper">
                            <time class="tournament__start-time" datetime="2024-07-08 15:30">08.07.2024 <span class="tournament__thin-text">15:30</span></time>
                        </div>
                        <div class="tournament__item-wrapper">
                            <span class="tournament__thin-text">До начала</span>&nbsp<time class="tournament__timestamp"> 1д 8ч 15м 30с</time>
                        </div>
                    </li>
                    
                </ul>
            </section>
        </main>
    </div>

    @vite('resources/js/modal-menu.js')
    @vite('resources/js/hidden-controls.js')
</body>
</html>