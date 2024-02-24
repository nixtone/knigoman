@extends('design')

@section('title', "Личный кабинет")
@section('content')
<div id="user_private">
    <table class="profile">
        <tr>
            <td class="msg">Имя</td>
            <td>{{ Auth::user()->name }}</td>
        </tr>
        <tr>
            <td class="msg">E-mail</td>
            <td>{{ Auth::user()->email }}</td>
        </tr>
        <tr>
            <td class="msg">Создан</td>
            <td>{{ Auth::user()->created_at }}</td>
        </tr>
    </table>
    <a href="{{ route('book.create') }}" class="add btn">Новая книга</a>
    @include('book.inc.area', $arBook)

</div>

@endsection
