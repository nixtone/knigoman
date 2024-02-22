@extends('design')

@section('title', 'Категория: '.$category->name)
@section('content')
<div id="category_item">
    <div class="descr">{{ $category->descr }}</div>
    @include('book.inc.area', $arBook)
</div>

@endsection
