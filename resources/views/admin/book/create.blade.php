@extends('admin.design')

@section('title', "Новая книга")
@section('content')
<div id="book_create">
    <form action="{{ route('admin.book.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="field_area">
            <label for="preview">Превью</label>
            @error('preview') <div class="err">{{ $message }}</div> @enderror
            <input type="file" name="preview" id="preview" class="field" accept=".jpg,.jpeg,.png">
        </div>
        <div class="field_area">
            <label for="name">Название книги</label>
            @error('name') <div class="err">{{ $message }}</div> @enderror
            <input type="text" name="name" id="name" class="field" value="{{ old('name') }}">
        </div>
        <div class="field_area">
            <label for="publish_year">Год издания</label>
            @error('publish_year') <div class="err">{{ $message }}</div> @enderror
            <input type="text" name="publish_year" id="publish_year" class="field" value="{{ old('publish_year') }}">
        </div>
        <div class="field_area">
            <label for="descr">Описание</label>
            @error('descr') <div class="err">{{ $message }}</div> @enderror
            <textarea name="descr" id="descr" class="field">{{ old('descr') }}</textarea>
        </div>
        <div class="field_area">
            <label for="author">Автор</label>
            @error('author') <div class="err">{{ $message }}</div> @enderror
            <select name="author_id" id="author" class="field">
                @foreach($arAuthor as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="field_area">
            <label for="category">Категория</label>
            @error('category') <div class="err">{{ $message }}</div> @enderror
            <select name="category_id" id="category" class="field">
                @foreach($arCategory as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn" value="Создать">
    </form>
</div>
@endsection
