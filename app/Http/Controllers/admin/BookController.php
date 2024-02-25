<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BookController extends BaseController
{

    public function list() {
        $arBook = Book::withTrashed()->get();
        return view('admin.book.list', compact('arBook'));
    }

    public function create() {
        $arAuthor = Author::all();
        $arCategory = Category::all();
        return view('admin.book.create', compact('arAuthor', 'arCategory'));
    }

    public function edit(Book $book) {
        $arAuthor = Author::all();
        $arCategory = Category::all();
        return view('admin.book.edit', compact('book', 'arAuthor', 'arCategory'));
    }

    public function store(BookRequest $request) {
        $createBook = $this->bookService->store($request);
        return redirect()->route('admin.book.list', $createBook->id);
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

    public function restore($book) {
        $book = Book::withTrashed()->find($book)->restore();
        return redirect()->route('admin.book.list');
    }

    public function destroyHard($book) {
        $this->bookService->destroyHard($book);
        return redirect()->route('admin.book.list');
    }

}
