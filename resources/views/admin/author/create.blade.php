@extends('admin.design')

@section('title', "Новый автор")
@section('content')
<div id="author_create">
    <form action="{{ route('admin.author.store') }}" method="post">

        @csrf

        <div class="field_area">
            <label for="name">Имя автора</label>
            @error('name') <div class="err">{{ $message }}</div> @enderror
            <input type="text" name="name" id="name" class="field" value="{{ old('name') }}">
        </div>

        <div class="field_area">
            <label for="birth_country">Страна рождения</label>
            @error('birth_country') <div class="err">{{ $message }}</div> @enderror
            <input type="text" name="birth_country" id="birth_country" class="field" value="{{ old('birth_country') }}">
        </div>

        <div class="field_area">
            <label for="descr">Описание</label>
            @error('descr') <div class="err">{{ $message }}</div> @enderror
            <textarea name="descr" id="descr" class="field">{{ old('descr') }}</textarea>
        </div>

        <input type="submit" class="btn" value="Создать">

    </form>
</div>
@endsection
