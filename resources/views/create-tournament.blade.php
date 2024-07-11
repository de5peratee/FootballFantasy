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
    @vite(['resources/css/form.css'])
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
            <section class="banner">
                <h2 class="banner__title">Лето <br/>2024</h2>

                <div class="banner__content">
                    <button class="button--light banner__button" type="submit" form="tournament">
                        Создать турнир
                    </button>
                    <time class="banner__start-time" datetime="2024-07-05">5 июнь 2024</time>
                </div>
            </section>
            <header class="content-header content-header__group">
                <div class="content-header__group">
                    <h2 class="content-header__title">Создание турнира</h2>
                    <button id="reset-button" class="content-header__button button--boring" type="reset" form="tournament">Сбросить</button>
                </div>
                <div class="content-header__group">
                    <ul class="content-header__type-list">
                        <li class="content-header__type">Текущие турниры</li>
                        <li class="content-header__type active">Мои турниры</li>
                    </ul>
                </div>
            </header>

            <form class="form" id="tournament" action="/create-tournament" method="POST">
                @csrf
                <h2 class="visually-hidden">Форма создания турнира</h2>
                <div class="form__input-box">
                    <label for="tournament-name" class="visually-hidden">Название турнира</label>
                    <input class="form__input input" type="text" id="tournament-name" name="tournament-name" placeholder="Название турнира"/>
                    <span class="form__error" id="error-tournament-name"></span>
                </div>
                <div class="form__input-box">
                    <label for="budget" class="visually-hidden">Бюджет</label>
                    <input class="form__input input" type="number" id="budget" name="budget" placeholder="Бюджет в миллионах (от 50 до 400)" title="Введите бюджет в миллионах"/>
                    <span class="form__error" id="error-budget"></span>
                </div>
                <div class="form__input-box form__input-box--date">
                    <label for="date" class="visually-hidden">Дата начала турнира</label>
                    <input class="form__input form__input--date input" type="datetime-local" id="date" name="date" placeholder="Дата начала ДД:ММ:ГГ ЧЧ:ММ:СС" title="Введите дату и время начала" />
                    <span class="form__error" id="error-date"></span>
                </div>
                <div class="form__input-box">
                    <label for="iteration-dur" class="visually-hidden">Длительность итерации</label>
                    <input class="form__input input" type="number" id="iteration-dur" name="iteration-dur" placeholder="Длительность итерации (дни)" title="Введите длительность итерации в днях" min="0"/>
                    <span class="form__error" id="error-iteration-dur"></span>
                </div>
                <div class="form__input-box">
                    <label for="iteration-cnt" class="visually-hidden">Количество итераций</label>
                    <input class="form__input input" type="number" id="iteration-cnt" name="iteration-cnt" placeholder="Количество итераций" title="Введите количество итераций" min="1" />
                    <span class="form__error" id="error-iteration-cnt"></span>
                </div>
                <div class="form__input-box">
                    <label for="members-cnt" class="visually-hidden">Количество участников</label>
                    <input class="form__input input" type="number" id="members-cnt" name="members-cnt" placeholder="Количество участников" title="Введите количество участников турнира (до 5)" />
                    <span class="form__error" id="error-members-cnt"></span>
                </div>
                <div class="form__input-box">
                    <label for="timer" class="visually-hidden">Время на выбор футболиста</label>
                    <input class="form__input form__passowrd input" type="number" id="timer" name="timer" placeholder="Время на выбор (сек)" title="Введите максимальное время, в течение которого нужно выборать одного футболиста" />
                    <span class="form__error" id="error-timer"></span>
                </div>
                <div class="form__input-box">
                    <label for="password" class="visually-hidden">Пароль</label>
                    <input class="form__input input" type="text" id="password" name="password" placeholder="Пароль" title="Введите пароль, по которму можно будет присоединиться к турниру"/>
                    <span class="form__error" id="error-password"></span>
                </div>
                <div class="form__wide-container">
                    <div class="form__league-search-box form__input-box search-box">
                        <label class="visually-hidden" for="search">Поиск лиги</label>
                        <input class="form__input input" type="search" id="search" name="search" placeholder="Найти лигу" />
                        <button class="search-box__controls" type="button" data-action="search" data-target-id="leagues"></button>
                    </div>
                    <ul class="leagues" id="leagues-list">
                        @foreach($leagues as $league)
                            <li class="leagues__item">
                                <label for="{{ 'league-' . $league['league']['id'] }}" class="league">
                                    <input class="leagues__input" type="radio" id="{{ 'league-' . $league['league']['id'] }}" name="league" value="{{ $league['league']['id'] }}">
                                    <div class="league__img-container">
                                        <img class="league__img" src="{{ $league['league']['logo'] }}" alt="{{ $league['league']['name'] }}" width="60" height="" loading="lazy" />
                                    </div>
                                    <h4 class="league__title" title="{{ $league['league']['name'] }}">{{ $league['league']['name'] }}</h4>
                                    <div class="league__timestamp">
                                        <time datetime="{{ $league['seasons'][0]['start'] }}">{{ date('d.m.Y', strtotime($league['seasons'][0]['start'])) }}</time>-<time datetime="{{ $league['seasons'][0]['end'] }}">{{ date('d.m.Y', strtotime($league['seasons'][0]['end'])) }}</time>
                                    </div>
                                </label>
                            </li>
                        @endforeach
                    </ul>
                    <button class="leagues__load-more button--boring button" id="load-more" data-offset="10">Ещё</button>
                </div>
            </form>

        </main>
    </div>

    @vite('resources/js/modal-menu.js')
    @vite('resources/js/hidden-controls.js')
    @vite('resources/js/form.js')
    @vite('resources/js/pagination-leagues.js')
    @vite('resources/js/leagues-search.js')
    @vite('resources/js/create-tournament-validation.js')
    @vite('resources/js/timer.js')
</body>
</html>
