<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function getPreviewAttribute() {
        $arFile = Storage::disk('public')->files("/book/".$this->id);
        return $arFile ? "/storage/".$arFile[array_key_first($arFile)] : "/static/images/noimage.png";
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
