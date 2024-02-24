@extends('design')

@section('title', "Новая книга")
@section('content')
<form action="{{ route('book.store') }}" method="post">
    @csrf
    <div class="field_area">
        <label for="name">Название книги</label>
        @error('name') {{ $message }} @enderror
        <input type="text" name="name" id="name" class="field" value="{{ old('name') }}">
    </div>
    <div class="field_area">
        <label for="publish_year">Год издания</label>
        @error('publish_year') {{ $message }} @enderror
        <input type="text" name="publish_year" id="publish_year" class="field" value="{{ old('publish_year') }}">
    </div>
    <div class="field_area">
        <label for="descr">Описание</label>
        @error('descr') {{ $message }} @enderror
        <textarea name="descr" id="descr" class="field">{{ old('descr') }}</textarea>
    </div>
    <div class="field_area">
        <label for="author">Автор</label>
        @error('author') {{ $message }} @enderror
        <select name="author_id" id="author" class="field">
            @foreach($arAuthor as $author)
            <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="field_area">
        <label for="category">Категория</label>
        @error('category') {{ $message }} @enderror
        <select name="category_id" id="category" class="field">
            @foreach($arCategory as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" class="btn" value="Создать">
</form>
@endsection
