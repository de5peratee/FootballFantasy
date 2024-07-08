<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AllTournamentsController;
use App\Http\Controllers\MyTournamentsController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\CreateTournamentController;
use App\Http\Controllers\DraftController;

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

//Все турниры
Route::get('/all-tournaments', [AllTournamentsController::class, 'index'])->middleware('auth');

//Мои турниры
Route::get('/my-tournaments', [MyTournamentsController::class, 'index'])->middleware('auth');

//Турнир
Route::get('/tournament', [TournamentController::class, 'index'])->middleware('auth');

//Создание турнира
Route::get('/create-tournament', [CreateTournamentController::class, 'index'])->middleware('auth');

//Драфт
Route::get('/draft', [DraftController::class, 'index'])->middleware('auth');

//Выход из сессии
Route::get('/logout', [LogoutController::class, 'logout']);

