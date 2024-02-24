<?php

namespace App\Services;

use App\Models\Author;

class AuthorService
{

    public function store($data) {
        $createdAuthor = Author::create($data);
        return $createdAuthor;
    }

    public function update($data, $author) {
        return $author->update($data);
    }

}
