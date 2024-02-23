@extends('admin.design')

@section('title', "Список книг")
@section('content')
<div id="book_area">
    <table class="list">
        <tr>
            <th>Превью</th>
            <th>Название</th>
            <th>Год издания</th>
            <th>Автор</th>
            <th>Категория</th>
            <th>Добавил</th>
            <th>Создано</th>
            <th>Обновлено</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($arBook as $book)
            <tr class="item">
                <td class="preview"></td>
                <td class="name"><a href="#">{{ $book->name }}</a></td>
                <td class="publish_year">{{ $book->publish_year }}</td>
                <td class="author"><a href="#">{{ $book->author->name }}</a></td>
                <td class="category"><a href="#">{{ $book->category->name }}</a></td>
                <td class="user"><a href="#">{{ $book->user->name }}</a></td>
                <td class="created_at">{{ $book->created_at }}</td>
                <td class="updated_at">{{ $book->updated_at }}</td>
                <td class="edit"><a href="#">edit</a></td>
                <td class="delete"><a href="#">del</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
