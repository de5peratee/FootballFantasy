<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Fantasy</title>

    @vite(['resources/css/main.css'])
    @vite(['resources/css/page.css'])
    @vite(['resources/css/form.css'])
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
            <h2 class="header__title clip-text">Лето 2024</h2>   
            <time class="header__timer">11:48</time>
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
            <h2 class="visually-hidden">tournier creating</h2>
            <header class="content-header content-header__group">
                <h3 class="content-header__title">Создание турнира</h3>
                <div class="content-header__group">
                    <ul class="content-header__type-list">
                        <li class="content-header__type">Текущие турниры</li>
                        <li class="content-header__type active">Мои турниры</li>
                    </ul>
                </div>
            </header>

            <!-- action и method пока пустые -->
            <form class="form" action="" method="" id="tournament">
                <h3 class="visually-hidden">form for tournament creating</h3>
                <div class="form__input-box form__input-box--wide">
                    <label for="tournament-name" class="visually-hidden">Название турнира</label>
                    <input 
                        class="form__input  input" 
                        type="text" 
                        id="tournament-name" name="tournament-name" 
                        placeholder="Название турнира"
                    />
                    <span class="form__error"></span>
                </div>
                <div class="form__input-box form__input-box--wide">
                    <label for="budget" class="visually-hidden">Бюджет</label>
                    <input 
                        class="form__input input" 
                        type="num" 
                        id="budget" name="budget" 
                        placeholder="Бюджет"
                        title="Введите бюджет в долларах"
                    />
                    <span class="form__error"></span>
                </div>
                <div class="form__input-box form__input-box--date">
                    <label for="date" class="visually-hidden">Бюджет</label>
                    <input 
                        class="form__input form__input--date input" 
                        type="datetime-local" 
                        id="date" name="date" 
                        placeholder="Дата начала ДД:ММ:ГГ ЧЧ:ММ:СС"
                        title="Введите дату и время начала"
                    />
                    <span class="form__error"></span>
                </div>
                <div class="form__input-box">
                    <label for="iteration-dur" class="visually-hidden">Длительность итерации</label>
                    <input 
                        class="form__input input" 
                        type="num" 
                        id="iteration-dur" name="iteration-dur" 
                        placeholder="Длительность итерации"
                        title="Введите длительность итерации в днях"
                    />
                    <span class="form__error"></span>
                </div>
                <div class="form__input-box">
                    <label for="iteration-cnt" class="visually-hidden">Длительность итерации</label>
                    <input 
                        class="form__input input" 
                        type="num" 
                        id="iteration-cnt" name="iteration-cnt" 
                        placeholder="Количество итераций"
                        title="Введите количество итераций"
                    />
                    <span class="form__error"></span>
                </div>
                <div class="form__input-box">
                    <label for="members-cnt" class="visually-hidden">Длительность итерации</label>
                    <input 
                        class="form__input input" 
                        type="num" 
                        id="members-cnt" name="members-cnt" 
                        placeholder="Количество участников"
                        title="Введите количество участников турнира"
                    />
                    <span class="form__error"></span>
                </div>
                <div class="form__wide-container">
                    <ul class="leagues">
                        <li class="leagues__item">
                            <label for="champion-league" class="league">
                                <input class="visually-hidden" type="radio" id="champion-league" name="league" checked>
                                <div class="league__img-container">
                                    <img class="league__img"
                                        src={{asset('images/leagues/cl.png')}}
                                        alt=""
                                        width="60" height="" loading="lazy"
                                    />
                                </div>
                                <h4 class="league__title">Лига чемпионов</h4>
                                <div class="league__timestamp">
                                    <time datetime="2023-19-09">19.09.2023</time>&nbsp-&nbsp<time datetime="2024-06-02">02.06.2024</time>
                                </div>
                            </label>
                        </li>
                        <li class="leagues__item">
                            <label for="champion-league2" class="league">
                                <input class="visually-hidden" type="radio" id="champion-league2" name="league">
                                <div class="league__img-container">
                                    <img class="league__img"
                                        src={{asset('images/leagues/cl.png')}}
                                        alt=""
                                        width="60" height="" loading="lazy"
                                    />
                                </div>
                                <h4 class="league__title">Лига чемпионов</h4>
                                <div class="league__timestamp">
                                    <time datetime="2023-19-09">19.09.2023</time>&nbsp-&nbsp<time datetime="2024-06-02">02.06.2024</time>
                                </div>
                            </label>
                        </li>
                        <li class="leagues__item">
                            <label for="champion-league3" class="league">
                                <input class="visually-hidden" type="radio" id="champion-league3" name="league">
                                <div class="league__img-container">
                                    <img class="league__img"
                                        src={{asset('images/leagues/cl.png')}}
                                        alt=""
                                        width="60" height="" loading="lazy"
                                    />
                                </div>
                                <h4 class="league__title">Лига чемпионов</h4>
                                <div class="league__timestamp">
                                    <time datetime="2023-19-09">19.09.2023</time>&nbsp-&nbsp<time datetime="2024-06-02">02.06.2024</time>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
            </form>
        </main>
    </div>

    @vite('resources/js/modal-menu.js')
    @vite('resources/js/hidden-controls.js')
</body>
</html>