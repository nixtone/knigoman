<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends BaseController
{

    public function list() {
        $arCategory = Category::all();
        $arBook = Book::all();

        return view('index', compact('arCategory', 'arBook'));
    }

    public function item(Book $book) {
        return view('book.item', compact('book'));
    }

    public function create() {
        $arAuthor = Author::all();
        $arCategory = Category::all();
        return view('book.create', compact('arAuthor', 'arCategory'));
    }

    public function edit(Book $book) {
        $arAuthor = Author::all();
        $arCategory = Category::all();
        return view('book.edit', compact('book', 'arAuthor', 'arCategory'));
    }

    public function store(BookRequest $request) {
        // Валидация
        $validated = $request->validated();
        $validated['user_id'] = Auth::user()->id;
        // Создание
        $createBook = $this->bookService->store($validated);
        // Переход
        return redirect()->route('book.item', $createBook->id);

    }

    public function update(BookRequest $request, Book $book) {
        // Обновление
        $this->bookService->update($request->validated(), $book);
        // Переход
        return redirect()->route('book.item', $book->id);
    }

    public function destroy(Book $book) {
        $book->delete();
        return redirect()->route('index');
    }

}
