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
    @vite(['resources/css/field.css'])
    @vite(['resources/css/footballers.css'])
    
    
</head>
<body>
    @include('aside_menu')
    <div class="content">
        <h1 class="visually-hidden">Просмотр команды</h1>
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
            <h2 class="header__title clip-text">Команда @nickname</h2>
            <time class="header__timer">
                <span id="current-time"></span>
            </time>
        </header>
        <main class="main">
        <section class="field centring-wrapper">
                <div class="field__wrapper">
                    <div class="field__tactics centered" id="tactics">
                        <button class="field__tactics-button"></button>
                        <ul class="field__tactics-list select" id="tactic">
                            <li class="select__item field__option active" value="3-3-4" data-action="activate-me" data-name="tactic">3-3-4</li>
                            <li class="select__item field__option" value="4-3-3" data-action="activate-me" data-name="tactic">4-3-3</li>
                            <li class="select__item field__option" value="4-2-4" data-action="activate-me" data-name="tactic">4-2-4</li>
                        </ul>
                    </div>
                    <div class="field__body">
                        <div class="field__footballers-wrapper">
                            <ul class="field__footballers " id="attackers">
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="show-block" data-target-id="field-footballer" data-name="search-footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/player.jfif')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                            </ul>
                            <ul class="field__footballers" id="midfielders">
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                            </ul>
                            <ul class="field__footballers" id="defenders">
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                            </ul>
                            <ul class="field__footballers" id="goalkeeper">
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- чтобы этот блок с инфой появился нужно указать какой-нибудь кнопке -->
                <div class="footballer-controls--fixed footballer-controls--left footballer-controls--mid footballer-controls" id="field-footballer">
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
                            data-action="close-block">
                            Скрыть
                        </button>
                    </div>
                </div>
            </section>
        </main>
    </div>
    
    @vite('resources/js/modal-menu.js')
    @vite('resources/js/timer.js')
    @vite('resources/js/tactics-dropdown.js')
    @vite('resources/js/activate-action.js')

</body>
</html>