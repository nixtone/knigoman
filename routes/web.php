<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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

// Отдельные страницы
Route::get('/', [BookController::class, 'list'])->name('index');

// Книги
Route::name('book.')->controller(BookController::class)->group(function() {
    Route::get('/book/{book}', 'item')->name('item');
});

// Авторы
Route::name('author.')->prefix('/author')->controller(AuthorController::class)->group(function() {
    Route::get('/{author}', 'item')->name('item');
});

// Категории
Route::name('category.')->prefix('/category')->controller(CategoryController::class)->group(function() {
    Route::get('/{category}', 'item')->name('item');
});

// Пользователи
Route::name('user.')->controller(UserController::class)->group(function() {
    Route::middleware('auth')->group(function() {
        Route::get('/private', 'private')->name('private');
        Route::get('/logout', 'logout')->name('logout');
    });
    Route::post('/auth', 'auth')->name('auth');
    Route::get('/reg', 'reg')->name('reg');
    Route::post('/signup', 'signup')->name('signup');
});

