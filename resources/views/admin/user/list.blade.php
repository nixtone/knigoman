@extends('admin.design')

@section('title', "Список пользователей")
@section('content')
<div id="user_list">
    <table class="list">
        <tr>
            <th>Название</th>
            <th>E-mail</th>
            <th>Статус</th>
            <th>Создано</th>
            <th>Обновлено</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($arUser as $user)
            <tr class="item">
                <td class="name">{{ $user->name }}</td>
                <td class="email">{{ $user->email }}</td>
                <td class="status">{{ $user->is_admin }}</td>
                <td class="created_at">{{ $user->created_at }}</td>
                <td class="updated_at">{{ $user->updated_at }}</td>
                <td class="edit"><a href="#">edit</a></td>
                <td class="delete"><a href="#">del</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
