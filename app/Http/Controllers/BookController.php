<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function list() {
        $arCategory = Category::all();
        $arBook = Book::all();

        return view('index', compact('arCategory', 'arBook'));
    }

    public function item(Book $book) {
        return view('book.item', compact('book'));
    }

}
