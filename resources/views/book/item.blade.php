@extends('design')

@section('title', "Книга: ".$book->name)
@section('content')
<div id="book_item" class="block">
    <div class="preview_area">
        <a href="{{ asset($book->preview) }}" data-fancybox="gallery">
            <img src="{{ asset($book->preview) }}" alt="" class="preview bimg">
        </a>
    </div>
    <div class="descr list_area">

        <div class="item">
            <div class="label">Автор:</div>
            <div class="content"><a href="{{ route('author.item', $book->Author->id) }}">{{ $book->Author->name }}</a></div>
        </div>
        <div class="item">
            <div class="label">Год издания:</div>
            <div class="content">{{ $book->publish_year }}</div>
        </div>
        <div class="item">
            <div class="label">Описание:</div>
            <div class="content">{{ $book->descr }}</div>
        </div>

    </div>
</div>
@endsection
