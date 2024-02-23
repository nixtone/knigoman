<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory;

    public function getPreviewAttribute($value) {
        // форич на случай множественных файлов
        return "/static/images/noimage.png";
        /*
        $arFile = [];
        foreach(Storage::files("/public/book/{$this->id}") as $key => $file) {
            $arFile[$this->id] = "/storage/app/".$file;
        }
        return $arFile[array_key_first($arFile)];
        */
    }

    public function Category() {
        return $this->belongsTo(Category::class);
    }

    public function Author() {
        return $this->belongsTo(Author::class);
    }

    public function User() {
        return $this->belongsTo(User::class);
    }

}
