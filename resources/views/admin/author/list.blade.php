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
                <td class="edit"><a href="#">edit</a></td>
                <td class="delete"><a href="#">del</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
