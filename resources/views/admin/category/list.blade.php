@extends('admin.design')

@section('title', "Список категорий")
@section('content')
<div id="category_list">
    <table class="list">
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Создано</th>
            <th>Обновлено</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($arCategory as $category)
            <tr class="item">
                <td class="name">{{ $category->name }}</td>
                <td class="descr">{{ $category->descr }}</td>
                <td class="created_at">{{ $category->created_at }}</td>
                <td class="updated_at">{{ $category->updated_at }}</td>
                <td class="edit"><a href="#">edit</a></td>
                <td class="delete"><a href="#">del</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
