@extends('admin.design')

@section('title', "Список категорий")
@section('content')
<div id="category_list">
    <table class="list">
        <tr>
            <th>Название</th>
            <th>Создано</th>
            <th>Обновлено</th>
            <th colspan="3"><a href="{{ route('admin.category.create') }}" class="btn">Новая категория</a></th>
        </tr>
        @foreach($arCategory as $category)
            <tr class="item @if($category->deleted_at) hidden @endif ">
                <td class="name">{{ $category->name }}</td>
                <td class="created_at">{{ $category->created_at }}</td>
                <td class="updated_at">{{ $category->updated_at }}</td>
                <td class="edit"><a href="{{ route('admin.category.edit', $category->id) }}">edit</a></td>
                <td class="delete">
                    @if($category->deleted_at)
                        <a href="{{ route('admin.category.restore', $category->id) }}">Восстановить</a>
                    @else
                        <form action="{{ route('admin.category.delete', $category->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="ico delete">Скрыть</button>
                        </form>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.category.destroy.hard', $category->id) }}">Удалить</a>
                </td>
            </tr>
        @endforeach

        @if($arCategory->isEmpty())
            <tr>
                <td colspan="6" style="text-align: center">Категорий нет</td>
            </tr>
        @endif

    </table>
</div>
@endsection
