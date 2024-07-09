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
        <h1 class="visually-hidden">Сравнение футболистов</h1>
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
            <h2 class="header__title clip-text">Футболисты</h2>
            <time class="header__timer">11:48</time>
        </header>
        <main class="main">
            <ul class="swiper">
                <li class="swiper__item footballer-controls active-block">
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
                        <button class="footballer-controls__button footballer-controls__button--grey button"
                            data-action="close-block deactivate" data-name="footballer">
                            Убрать из сравнения
                        </button>
                    </div>
                </li>
                <li class="swiper__item footballer-controls active-block">
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
                        <button class="footballer-controls__button footballer-controls__button--grey button"
                            data-action="close-block deactivate" data-name="footballer">
                            Убрать из сравнения
                        </button>
                    </div>
                </li>
                <li class="swiper__item footballer-controls active-block">
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
                        <button class="footballer-controls__button footballer-controls__button--grey button"
                            data-action="close-block deactivate" data-name="footballer">
                            Убрать из сравнения
                        </button>
                    </div>
                </li>
            </ul>
        </main>
        <footer class="footer centered">
            <a href="/footballers" class="footer__button footer__item footer__content centring-wrapper">К футболистам</a>
        </footer>
    </div>
    
    @vite('resources/js/modal-menu.js')

</body>
</html>