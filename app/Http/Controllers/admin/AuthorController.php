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
        return view('admin.author.create');
    }

    public function store(AuthorRequest $request) {
        // Валидация
        $validated = $request->validated();
        // Создание
        $createAuthor = $this->authorService->store($validated);
        // Переход
        return redirect()->route('admin.author.list', $createAuthor->id);
    }

    public function edit(Author $author) {
        return view('admin.author.edit', compact('author'));
    }

    public function update(AuthorRequest $request, Author $author) {
        // Обновление
        $this->bookService->update($request->validated(), $author);
        // Переход
        return redirect()->route('admin.author.list', $author->id);
    }

    public function destroy(Author $author) {
        $author->delete();
        return redirect()->route('admin.author.list');
    }

}
