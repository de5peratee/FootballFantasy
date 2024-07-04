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
    <form action="/registration" method="POST" class="form container">
        @csrf
        <div class="form__wrapper centered">
            <header class="form__header">
                <h1 class="form__title centered">Регистрация</h1>
            </header>

            <div class="form__input-group">

                <div class="form__input-container">
                    <label for="email" class="form__label visually-hidden">Введите почту</label>
                    <input class="form__input" type="email" id="email" name="email" placeholder="Почта" value="{{ old('email') }}"/>
                    @error('email')
                    <span class="form__error active">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form__input-container">
                    <label for="login" class="form__label visually-hidden">Введите логин</label>
                    <input class="form__input" type="text" id="login" name="login" placeholder="Логин" value="{{ old('login') }}"/>
                    @error('login')
                    <span class="form__error active">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form__input-container">
                    <label for="password" class="form__label visually-hidden">Введите пароль</label>
                    <input class="form__input" type="password" id="password" name="password" placeholder="Придумайте пароль"/>
                    @error('password')
                    <span class="form__error active">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form__input-container">
                    <label for="password_confirmation" class="form__label visually-hidden">Повторите пароль</label>
                    <input class="form__input" type="password" id="password_confirmation" name="password_confirmation" placeholder="Повторите пароль"/>
                    @error('password_confirmation')
                    <span class="form__error active">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <footer class="form__footer">
                <input class="form__submit form__button button button--dark" type="submit" value="Зарегистрироваться"/>
                <a class="link" href="./authorization">Уже есть аккаунт</a>
            </footer>
        </div>
    </form>
</main>
</body>
</html>
