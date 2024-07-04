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
    <header class="header centring-wrapper">
        <a href="./authorization">
            <img class="header__logo centered"
                src={{asset('images/logo.svg')}}
                alt="Football Fantasy logo"
                width="423" height="64" loading="lazy"
            />
        </a>
    </header>
    <main>
        <form action="/authorization" method="POST" class="form container">
            @csrf
            <div class="form__wrapper centered">
                <header class="form__header">
                    <h1 class="form__title centered">Авторизация</h1>
                </header>

                <div class="form__input-group">

                    <div class="form__input-container">
                        <label for="login" class="form__label visually-hidden">Введите никнейм</label>
                        <input class="form__input" type="text" id="login" name="login" placeholder="Логин"/>
                        @error('login')
                        <span class="form__error active">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form__input-container">
                        <label for="password" class="form__label visually-hidden">Введите пароль</label>
                        <input class="form__input" type="password" id="password" name="password" placeholder="Пароль"/>
                        @error('password')
                        <span class="form__error active">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <footer class="form__footer">
                    <input class="form__submit form__button button button--dark" type="submit" value="Войти"/>
                    <a class="link" href="./registration">Нет аккаунта</a>
                </footer>
            </div>
        </form>
    </main>
</body>
</html>
