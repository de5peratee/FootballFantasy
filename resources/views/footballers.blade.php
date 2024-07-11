<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Football Fantasy</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @vite(['resources/css/main.css'])
    @vite(['resources/css/page.css'])
    @vite(['resources/css/footballers.css'])
    
</head>
<body>
@include('aside_menu')
<div class="content">
    <h1 class="visually-hidden">Создание своего турнира</h1>
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
            <time class="header__timer">
                <span id="current-time"></span>
            </time>
        </header>
        <main class="main">
            <div class="footballers">
                <div class="footballers__header">
                    <h2 class="footballers__title">
                        Футболисты
                    </h2>
                    <div class="footballers__search-box search-box">
                        <label for="fotballers-search" class="visually-hidden">Поиск по футболистам</label>
                        <input class="footballers__search input" type="search" id="footballers-search" name="footballers-search" placeholder="Найти футболиста"/>
                        <button class="footballers__search-controls search-box__controls"></button>
                    </div>
                </div>
                width="39" height="39" loading="lazy"
                />
            </a>
        </div>
        <h2 class="header__title clip-text">Лето 2024</h2>
        <time class="header__timer">11:48</time>
    </header>
    <main class="main">
        <div class="footballers">
            <div class="footballers__header">
                <h2 class="footballers__title">
                    Футболисты
                </h2>
                <div class="footballers__search-box search-box">
                    <label for="fotballers-search" class="visually-hidden">Поиск по футболистам</label>
                    <input class="footballers__search input" type="search" id="footballers-search" name="footballers-search" placeholder="Найти футболиста"/>
                    <button class="footballers__search-controls search-box__controls"></button>
                </div>
            </div>
            <section class="content">
                <div class="footballers__wrapper">
                    <div class="footballers__list">
                        @foreach($players as $player)
                            <article class="footballers__card">
                                    <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="footballer">
                                    @if(isset($player['photo']) && !empty($player['photo']))
                                        <img class="footballers__img"
                                             src="{{ $player['photo'] }}"
                                             alt="{{ $player['name'] }}"
                                             loading="lazy"
                                        />
                                    @else
                                        <img class="footballers__img"
                                             src="{{ asset('images/default-player.png') }}" <!-- Замените на ваше стандартное изображение -->
                                        alt="{{ $player['name'] }}"
                                        loading="lazy"
                                        />
                                    @endif
                                    </button>
                                <h3 class="footballers__name clip-text">{{ $player['name'] }}</h3>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

        </div>

        <div class="footballer-controls footballer-controls--fixed footballer-controls--mid footballer-controls--right" id="footballer-controls">
            <div class="footballer-controls__img-wrapper">
                <img class="footballer-controls__img"
                     src={{asset('images/avatar.svg')}}
                        alt=""
                     height="143" loading="lazy"
                />
            </div>
            <div class="footballer-controls__inf-wrapper">
                <h3 class="footballer-controls__title">Имя футболиста <br/>в две строки как-то</h3>
                <div class="footballer-controls__price fooballer-controls__accent-text">45000&dollar;</div>
                <div class="footballer-controls__inf"><span>Голы</span><span class="fooballer-controls__accent-text">10</span></div>
                <div class="footballer-controls__inf"><span>Удары</span><span class="fooballer-controls__accent-text">10</span></div>
                <div class="footballer-controls__inf"><span>Ключевые пасы</span><span class="fooballer-controls__accent-text">10</span></div>
                <div class="footballer-controls__inf"><span>Ассисты</span><span class="fooballer-controls__accent-text">10</span></div>
                <div class="footballer-controls__inf"><span>Поймано</span><span class="fooballer-controls__accent-text">10</span></div>
                <div class="footballer-controls__inf"><span>Отборы</span><span class="fooballer-controls__accent-text">10</span></div>
                <div class="footballer-controls__inf"><span>Желтные карточки</span><span class="fooballer-controls__accent-text">10</span></div>
                <div class="footballer-controls__inf"><span>Красные карточки</span><span class="fooballer-controls__accent-text">10</span></div>
            </div>
            <div class="footballer-controls__buttons">
                <button class="footballer-controls__button footballer-controls__button--white button">Добавить в сравнение</button>
                <button class="footballer-controls__button footballer-controls__button--grey button"
                        data-action="close-block deactivate" data-name="footballer">
                    Скрыть
                </button>
            </div>
        </div>
    </main>
    <footer class="footer centered">
        <a href="/compare" class="footer__button footer__item footer__content centring-wrapper">Перейти к сравнению</a>
    </footer>
</div>

    @vite('resources/js/modal-menu.js')
    @vite('resources/js/activate-action.js')
    @vite('resources/js/timer.js')

</body>
</html>
