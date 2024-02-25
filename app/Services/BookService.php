<?php

namespace App\Services;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BookService
{

    public function store($data) {

        // Валидация
        $validated = $data->validated();
        $validated['user_id'] = Auth::user()->id;
        if(isset($validated['preview'])) {
            $preview = $validated['preview'];
            unset($validated['preview']);
        }
        else {
            $preview = false;
        }

        //
        $createdBook = Book::create($validated);

        // Загрузка превью
        if($preview) {
            $path = "/book/".$createdBook->id;
            $disk = Storage::disk('public');
            $disk->makeDirectory($path);
            list($dir, $basename, $extension, $filename) = array_values(pathinfo($preview->getClientOriginalName()));
            $preview->storeAs('/public'.$path."/preview.".$extension);
        }

        return $createdBook;
    }

    public function update($data, $book) {
        return $book->update($data);
    }

    public function destroyHard($book) {
        $forceDeleteStatus = Book::where('id', $book)->forceDelete();
        Storage::disk('public')->deleteDirectory("/book/".$book);
        return $forceDeleteStatus;
    }

}
