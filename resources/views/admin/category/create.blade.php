@extends('admin.design')

@section('title', "Новая категория")
@section('content')
<div id="category_create">
    <form action="{{ route('admin.category.store') }}" method="post">

        @csrf

        <div class="field_area">
            <label for="name">Название категории</label>
            @error('name') <div class="err">{{ $message }}</div> @enderror
            <input type="text" name="name" id="name" class="field" value="{{ old('name') }}">
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
