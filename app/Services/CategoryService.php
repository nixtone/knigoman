<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{

    public function store($data) {
        $createdCategory = Category::create($data);
        return $createdCategory;
    }

    public function update($data, $category) {
        return $category->update($data);
    }

}
