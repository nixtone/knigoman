<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\BaseController;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{

    public function list() {
        // $arCategory = Category::all();
        $arCategory = Category::withTrashed()->get();
        return view('admin.category.list', compact('arCategory'));
    }

    public function create() {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request) {
        // Валидация
        $validated = $request->validated();
        //dd($validated);
        // Создание
        $createCategory = $this->categoryService->store($validated);
        // Переход
        return redirect()->route('admin.category.list', $createCategory->id);
    }

    public function edit(Category $category) {
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category) {
        // Обновление
        $this->bookService->update($request->validated(), $category);
        // Переход
        return redirect()->route('admin.category.list', $category->id);
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('admin.category.list');
    }

    public function restore($category) {
        $category = Category::withTrashed()->find($category)->restore();
        return redirect()->route('admin.category.list');
    }

    public function destroyHard($category) {
        Category::where('id', $category)->forceDelete();
        return redirect()->route('admin.category.list');
    }

}
