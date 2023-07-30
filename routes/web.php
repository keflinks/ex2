<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

require __DIR__ . '/auth.php';

Route::controller(HomeController::class)
    ->middleware('auth')
    ->group(function () {
        Route::get('', 'index')->name('home');
    });

Route::controller(FilmController::class)
    ->middleware('auth')
    ->prefix('films')
    ->name('films.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'edit')->name('edit')->where('id', '[0-9]+');
        Route::put('/{id}', 'update')->name('update')->where('id', '[0-9]+');
        Route::delete('/{id}', 'destroy')->name('destroy')->where('id', '[0-9]+');
    });