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
            <th colspan="2"><a href="{{ route('admin.book.create') }}" class="btn">Новая книга</a></th>
        </tr>
        @foreach($arBook as $book)
            <tr class="item">
                <td class="preview"></td>
                <td class="name">{{ $book->name }}</td>
                <td class="publish_year">{{ $book->publish_year }}</td>
                <td class="author"><a href="#">{{ $book->author->name }}</a></td>
                <td class="category"><a href="#">{{ $book->category->name }}</a></td>
                <td class="user"><a href="#">{{ $book->user->name }}</a></td>
                <td class="created_at">{{ $book->created_at }}</td>
                <td class="updated_at">{{ $book->updated_at }}</td>
                <td class="edit"><a href="{{ route('admin.book.edit', $book->id) }}">edit</a></td>
                <td class="delete">
                    <form action="{{ route('admin.book.delete', $book->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="ico delete">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
