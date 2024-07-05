<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Fantasy</title>

    @vite(['resources/css/main.css'])
    @vite(['resources/css/page.css'])
</head>
<body>
    @include('aside_menu')
    <div class="content">
        <h1 class="visually-hidden">Tournament</h1>
        <header class="header">
            <div class="header__controls centring-wrapper">
                <button class="burger" data-action="show-modal" data-modal-id="aside-menu">
                    <span class="burger__decor"></span>
                </button>  
                <a class="header__logo-link" href="#">
                    <img class="header__logo"
                        src={{asset('images/mini-logo.svg')}}
                        alt="football fantasy logo"
                        width="39" height="39" loading="lazy"
                    />
                </a>   
            </div>
            <h2 class="header__title clip-text">Название турнира</h2>   
            <time class="header__timer">11:48</time>
        </header>
        <main class="main">
            <section class="banner">
                <h2 class="banner__title">Название турнира</h2>
                    
                <div class="banner__content">
                    <button class="button--light banner__button">
                        Принять участие
                    </button>
                    <time class="banner__start-time">4 июнь 2024</time>
                </div>
            </section>
            <h2 class="visually-hidden">tournament members</h2>
            <header class="content-header content-header__group">
                <div class="content-header__group">
                    <h3 class="content-header__title">Игроки</h3>
                    <button class="content-header__show button--boring">Посмотреть все</button>
                </div>
                <div class="content-header__group">
                    <ul class="content-header__type-list">
                        <li class="content-header__type">Текущие турниры</li>
                        <li class="content-header__type active">Мои турниры</li>
                    </ul>
                    <label class="visually-hidden" for="search"></label>
                    <div class="content-header__search-box">    
                        <input class="content-header__search input" type="search" id="search" name="search" placeholder="Найти"/>
                    </div>
                </div>
            </header>
            <div class="players">
                <figure class="player">
                    <div class="player__avatar-wrapper">
                        <img class="player__avatar" 
                            src={{asset('images/avatar.svg')}} 
                            alt="" 
                            loading="lazy"
                        />
                        <div class="player__controls">
                            <div class="player__inf player__inf--top">
                                Профиль
                            </div>
                            <a class="player__inf player__inf--bottom" href="./team">
                                Команда
                            </a>
                        </div>
                    </div>
                    <figcaption class="player__nickname clip-text">Ник пользователя</figcaption>
                </figure>
                <figure class="player">
                    <div class="player__avatar-wrapper">
                        <img class="player__avatar" 
                            src={{asset('images/avatar.svg')}} 
                            alt="" 
                            loading="lazy"
                        />
                        <div class="player__controls">
                            <div class="player__inf player__inf--top">
                                Профиль
                            </div>
                            <a class="player__inf player__inf--bottom" href="./team">
                                Команда
                            </a>
                        </div>
                    </div>
                    <figcaption class="player__nickname clip-text">Ник пользователя</figcaption>
                </figure>
                <figure class="player">
                    <div class="player__avatar-wrapper">
                        <img class="player__avatar" 
                            src={{asset('images/avatar.svg')}} 
                            alt="" 
                            loading="lazy"
                        />
                        <div class="player__controls">
                            <div class="player__inf player__inf--top">
                                Профиль
                            </div>
                            <a class="player__inf player__inf--bottom" href="./team">
                                Команда
                            </a>
                        </div>
                    </div>
                    <figcaption class="player__nickname clip-text">Ник пользователя</figcaption>
                </figure>
            </div>

            <!-- эта кнопка появляется когда чел уже участвует в турнире-->
            <a class="my-team-button button--light centered">
                Моя команда
            </a>

        </main>
        <footer class="reglament centered">
                <ul class="reglament__list">
                    <li class="reglament__item centring-wrapper">
                        <p class="reglament__content">
                            Название турнира
                        </p>
                    </li>
                    <li class="reglament__item centring-wrapper">
                        <p class="reglament__content">
                            06.07.2024 15:30
                        </p>
                    </li>
                    <li class="reglament__item  centring-wrapper">
                        <p class="reglament__content">
                            Турнир начат
                        </p>
                    </li>

                    <!-- это появляется когда чел уже участвует -->
                    <li class="reglament__item">
                        <button class="leave-button reglament__content button--white reglament__item centring-wrapper">
                            Покинуть турнир
                        </button>
                    </li>
                </ul>
            </footer>
    </div>

    @vite('resources/js/modal-menu.js')
    @vite('resources/js/players-card.js')
</body>
</html>