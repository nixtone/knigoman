<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\BaseController;
use App\Http\Requests\AuthorRequest;
use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends BaseController
{

    public function list() {
        $arAuthor = Author::all();
        return view('admin.author.list', compact('arAuthor'));
    }

    public function create() {
        $arAuthor = Author::all();
        $arCategory = Category::all();
        return view('admin.author.create', compact('arAuthor', 'arCategory'));
    }

    public function store(AuthorRequest $request) {
        /*
        // Валидация
        $validated = $request->validated();
        $validated['user_id'] = Auth::user()->id;
        // Создание
        $createBook = $this->bookService->store($validated);
        // Переход
        return redirect()->route('admin.book.list', $createBook->id);
        */
    }

    /*
    public function edit(Author $author) {
        $arAuthor = Author::all();
        $arCategory = Category::all();
        return view('admin.author.edit', compact('author', 'arAuthor', 'arCategory'));
    }

    public function update(BookRequest $request, Book $book) {
        // Обновление
        $this->bookService->update($request->validated(), $book);
        // Переход
        return redirect()->route('admin.book.list', $book->id);
    }

    public function destroy(Book $book) {
        $book->delete();
        return redirect()->route('admin.book.list');
    }
    */
}
