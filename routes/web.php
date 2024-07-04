<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return redirect('/authorization');
});

//Авторизация
Route::get('/authorization', [AuthorizationController::class, 'index'])->middleware('guest');;
Route::post('/authorization', [AuthorizationController::class, 'login']);

//Регистрация
Route::get('/registration', [RegistrationController::class, 'index']);;
Route::post('/registration', [RegistrationController::class, 'register'])->middleware('guest');

//Главная страница
Route::get('/main_page', [MainPageController::class, 'index'])->middleware('auth');

//Выход из сессии
Route::get('/logout', [LogoutController::class, 'logout']);
