<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function item(Category $category) {
        $arBook = Book::all()->where('category_id', $category->id);
        return view('category.item', compact('category', 'arBook'));
    }
}
