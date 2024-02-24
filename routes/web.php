<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\admin\BookController as AdminBookController;
use App\Http\Controllers\admin\AuthorController as AdminAuthorController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;

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
Route::name('book.')->prefix('/book')->controller(BookController::class)->group(function() {
    Route::get('/create', 'create')->name('create');
    Route::get('/{book}', 'item')->name('item');
    Route::get('/edit/{book}', 'edit')->name('edit');
    Route::post('/store', 'store')->name('store');
    Route::patch('/update/{book}', 'update')->name('update');
    Route::delete('/delete/{book}', 'destroy')->name('delete');
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

// Админка
Route::name('admin.')->prefix('/admin')->group(function() {

    Route::name('book.')->prefix('/book')->controller(AdminBookController::class)->group(function() {
        Route::get('/', 'list')->name('list');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{book}', 'edit')->name('edit');
        Route::post('/store', 'store')->name('store');
        Route::patch('/update/{book}', 'update')->name('update');
        Route::delete('/delete/{book}', 'destroy')->name('delete');
    });

    Route::name('author.')->prefix('/author')->controller(AdminAuthorController::class)->group(function() {
        Route::get('/', 'list')->name('list');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        /*
        Route::get('/edit/{book}', 'edit')->name('edit');
        Route::patch('/update/{book}', 'update')->name('update');
        Route::delete('/delete/{book}', 'destroy')->name('delete');
        */
    });

    /*
    Route::get('/author', 'authorList')->name('author');
    Route::get('/category', 'categoryList')->name('category');
    */

});
