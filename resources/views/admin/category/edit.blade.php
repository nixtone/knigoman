@extends('admin.design')

@section('title', "Редакция категории: ".$category->name)
@section('content')
<div id="category_edit">
    <form action="{{ route('admin.category.update', $category->id) }}" method="post">

        @csrf
        @method('patch')

        <div class="field_area">
            <label for="name">Название категории</label>
            @error('name') <div class="err">{{ $message }}</div> @enderror
            <input type="text" name="name" id="name" class="field" value="{{ $category->name }}">
        </div>

        <div class="field_area">
            <label for="descr">Описание</label>
            @error('descr') <div class="err">{{ $message }}</div> @enderror
            <textarea name="descr" id="descr" class="field">{{ $category->descr }}</textarea>
        </div>

        <input type="submit" class="btn" value="Редактировать">

    </form>
</div>
@endsection
