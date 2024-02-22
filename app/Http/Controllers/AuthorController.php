<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function item(Author $author) {
        $arBook = Book::all()->where('author_id', $author->id);
        return view('author.item', compact('author', 'arBook'));
    }
}
