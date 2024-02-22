@extends('design')

@section('title', 'Автор: '.$author->name)
@section('content')
<div id="author_item">
    <div class="list_area">
        <div class="item">
            <div class="label">Город рождения:</div>
            <div class="content">{{ $author->birth_country }}</div>
        </div>
        <div class="item">
            <div class="label"> Об авторе:</div>
            <div class="content">{{ $author->descr }}</div>
        </div>
    </div>
    
    @include('book.inc.area', $arBook)

</div>
@endsection
