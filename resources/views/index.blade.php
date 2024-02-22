@extends('design')

@section('content')
<div id="book_list" class="block">
    <div class="category_area">
        <h2>Категории</h2>
        @foreach($arCategory as $category)
            <a href="{{ route('category.item', $category->id) }}" class="category">{{ $category->name }}</a>
        @endforeach
    </div>
    <div class="inner">
        @include('book.inc.area', $arBook)
    </div>
</div>
@endsection
