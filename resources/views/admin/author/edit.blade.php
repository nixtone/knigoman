@extends('admin.design')

@section('title', "Редакция автора: ".$author->name)
@section('content')
<div id="author_create">
    <form action="{{ route('admin.author.update', $author->id) }}" method="post">

        @csrf
        @method('patch')

        <div class="field_area">
            <label for="name">Имя автора</label>
            @error('name') <div class="err">{{ $message }}</div> @enderror
            <input type="text" name="name" id="name" class="field" value="{{ $author->name }}">
        </div>

        <div class="field_area">
            <label for="birth_country">Страна рождения</label>
            @error('birth_country') <div class="err">{{ $message }}</div> @enderror
            <input type="text" name="birth_country" id="birth_country" class="field" value="{{ $author->birth_country }}">
        </div>

        <div class="field_area">
            <label for="descr">Описание</label>
            @error('descr') <div class="err">{{ $message }}</div> @enderror
            <textarea name="descr" id="descr" class="field">{{ $author->descr }}</textarea>
        </div>

        <input type="submit" class="btn" value="Редактировать">

    </form>
</div>
@endsection
