<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Fantasy</title>

    @vite(['resources/css/main.css'])
    @vite(['resources/css/auth.css'])
</head>
<body>
    <header class="header container">
        <a href="./authorization">
            <img class="header__logo centered"
                src={{asset('images/logo.svg')}}
                alt="Football Fantasy logo"
                width="423" height="64" loading="lazy"
            />
        </a>
    </header>
    <main class="centring-wrapper">
        <form action="" class="form container">
            <div class="form__wrapper centered">
                <header class="form__header">
                    <h1 class="form__title centered">Регистрация</h1>
                </header>
                
                <div class="form__input-group">
                    <div class="form__input-container">
                        <label for="email" class="form__label visually-hidden">Введите почту</label>
                        <input class="form__input" type="email" id="email" name="email" placeholder="Почта"/>
                        <span class="form__error active" id="email_error">ВСЕ ПЛОХО ТЫ НЕПРАВИЛЬНО ЗАПОЛНИЛ ГОТОВЬСЯ К СМЕРТИ</span>
                    </div>

                    <div class="form__input-container">
                        <label for="nickname" class="form__label visually-hidden">Введите никнейм</label>
                        <input class="form__input" type="text" id="nickname" name="nickname" placeholder="Никнейм"/>
                        <span class="form__error" id="nickname_error"></span>
                    </div>
                    
                    <div class="form__input-container">
                        <label for="password" class="form__label visually-hidden">Введите пароль</label>
                        <input class="form__input" type="password" id="password" name="password" placeholder="Придумайте пароль"/>
                        <span class="form__error" id="password_error"></span>
                    </div>
                    
                    <div class="form__input-container">
                        <label for="password_confirmation" class="form__label visually-hidden">Повторите пароль</label>
                        <input class="form__input" type="password" id="password_confirmation" name="password_confirmation" placeholder="Повторите пароль"/>
                        <span class="form__error" id="password_confirmation_error"></span>
                    </div>
                </div>
                
                <footer class="form__footer">
                    <a class="form__button button" href="./authorization">Уже есть аккаунт</a>
                    <input class="form__submit form__button button button--dark" type="submit" value="Зарегестрироваться"/>
                </footer>
            </div>
        </form>
    </main>
</body>
</html>