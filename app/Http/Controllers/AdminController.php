<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Category;
use App\Models\Book;

class AdminController extends Controller
{

    public function index() {

        return view('admin.index');
    }

    public function bookList() {
        $arBook = Book::all();
        return view('admin.book.list', compact('arBook'));
    }

    public function authorList() {
        $arAuthor = Author::all();
        return view('admin.author.list', compact('arAuthor'));
    }

    public function categoryList() {
        $arCategory = Category::all();
        return view('admin.category.list', compact('arCategory'));
    }

    public function userList() {
        $arUser = User::all();
        return view('admin.user.list', compact('arUser'));
    }

}
