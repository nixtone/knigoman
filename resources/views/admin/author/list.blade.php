@extends('admin.design')

@section('title', "Список авторов")
@section('content')
<div id="author_list">
    <table class="list">
        <tr>
            <th>Название</th>
            <th>Страна рождения</th>
            <th>Создано</th>
            <th>Обновлено</th>
            <th colspan="2"><a href="{{ route('admin.author.create') }}" class="btn">Новый автор</a></th>
        </tr>
        @foreach($arAuthor as $author)
            <tr class="item">
                <td class="name">{{ $author->name }}</td>
                <td class="birth_country">{{ $author->birth_country }}</td>
                <td class="created_at">{{ $author->created_at }}</td>
                <td class="updated_at">{{ $author->updated_at }}</td>
                <td class="edit"><a href="{{ route('admin.author.edit', $author->id) }}">edit</a></td>
                <td class="delete">
                    <form action="{{ route('admin.author.delete', $author->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="ico delete">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        @if($arAuthor->isEmpty())
            <tr>
                <td colspan="6" style="text-align: center">Авторов нет</td>
            </tr>
        @endif

    </table>
</div>
@endsection
