@extends('admin.design')

@section('title', "Редакция книги: ")
@section('content')
<form action="{{ route('admin.book.update', $book->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="field_area">
        <label for="name">Название книги</label>
        @error('name') <div class="err">{{ $message }}</div> @enderror
        <input type="text" name="name" id="name" class="field" value="{{ $book->name }}">
    </div>
    <div class="field_area">
        <label for="publish_year">Год издания</label>
        @error('publish_year') <div class="err">{{ $message }}</div> @enderror
        <input type="text" name="publish_year" id="publish_year" class="field" value="{{ $book->publish_year }}">
    </div>
    <div class="field_area">
        <label for="descr">Описание</label>
        @error('descr') <div class="err">{{ $message }}</div> @enderror
        <textarea name="descr" id="descr" class="field">{{ $book->descr }}</textarea>
    </div>
    <div class="field_area">
        <label for="author">Автор</label>
        @error('author') <div class="err">{{ $message }}</div> @enderror
        <select name="author_id" id="author" class="field">
            @foreach($arAuthor as $author)
                <option value="{{ $author->id }}" @if($author->id == $book->author_id) selected @endif>{{ $author->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="field_area">
        <label for="category">Категория</label>
        @error('category') <div class="err">{{ $message }}</div> @enderror
        <select name="category_id" id="category" class="field">
            @foreach($arCategory as $category)
                <option value="{{ $category->id }}" @if($category->id == $book->category_id) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" class="btn" value="Редактировать">
</form>
@endsection
