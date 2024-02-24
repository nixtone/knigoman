<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BookService;
use App\Services\AuthorService;
use App\Services\CategoryService;

class BaseController extends Controller
{

    public $bookService;
    public $authorService;
    public $categoryService;

    /**
     * @param $bookService
     * @param $authorService
     * @param $categoryService
     */
    public function __construct(
        BookService $bookService,
        AuthorService $authorService,
        CategoryService $categoryService
    )
    {
        $this->bookService = $bookService;
        $this->authorService = $authorService;
        $this->categoryService = $categoryService;
    }


}
