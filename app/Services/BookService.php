<?php

namespace App\Services;

use App\Models\Book;

class BookService
{

    public function store($data) {
        $createdBook = Book::create($data);
        return $createdBook;
    }

    public function update($data, $book) {
        return $book->update($data);
    }

}
