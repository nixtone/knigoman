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
            <th colspan="3"><a href="{{ route('admin.book.create') }}" class="btn">Новая книга</a></th>
        </tr>
        @foreach($arBook as $book)
            <tr class="item @if($book->deleted_at) hidden @endif ">
                <td class="preview_area"><img src="{{ $book->preview }}" alt="" class="preview"></td>
                <td class="name">{{ $book->name }}</td>
                <td class="publish_year">{{ $book->publish_year }}</td>
                <td class="author"><a href="{{ route('admin.author.edit', $book->author->id) }}">{{ $book->author->name }}</a></td>
                <td class="category"><a href="{{ route('admin.category.edit', $book->category->id) }}">{{ $book->category->name }}</a></td>
                <td class="user">{{ $book->user->name }}</td>
                <td class="created_at">{{ $book->created_at }}</td>
                <td class="updated_at">{{ $book->updated_at }}</td>

                <td class="edit"><a href="{{ route('admin.book.edit', $book->id) }}">edit</a></td>
                <td class="delete">
                    @if($book->deleted_at)
                        <a href="{{ route('admin.book.restore', $book->id) }}">Восстановить</a>
                    @else
                        <form action="{{ route('admin.book.delete', $book->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="ico delete">Скрыть</button>
                        </form>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.book.destroy.hard', $book->id) }}">Удалить</a>
                </td>

            </tr>
        @endforeach

        @if($arBook->isEmpty())
            <tr>
                <td colspan="10" style="text-align: center">Книг нет</td>
            </tr>
        @endif

    </table>
</div>
@endsection
