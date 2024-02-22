@extends('design')

@section('title', 'Регистрация')
@section('content')
<div id="reg" class="block">
    <form action="{{ route('user.signup') }}" method="post">
        @csrf
        <div class="field_area">
            <label for="username">Ваше имя @error('name')<span class="err">{{ $message }}</span>@enderror</label>
            <input type="text" name="name" id="username" value="{{ old('name') }}" class="field">
        </div>
        <div class="field_area">
            <label for="email_reg">E-mail * @error('email')<span class="err">{{ $message }}</span>@enderror</label>
            <input type="text" name="email" id="email_reg" value="{{ old('email') }}" class="field">
        </div>
        <div class="field_area">
            <label for="password_reg">Пароль * @error('password')<span class="err">{{ $message }}</span>@enderror</label>
            <input type="password" name="password" id="password_reg" value="{{ old('password') }}" class="field">
        </div>
        <div class="field_area">
            <label for="password2_reg">Пароль еще раз * @error('password_retype')<span class="err">{{ $message }}</span>@enderror</label>
            <input type="password" name="password_retype" id="password2_reg" value="{{ old('password_retype') }}" class="field">
        </div>
        <input type="submit" value="Войти" class="btn">
        @error('formError')<div class="err">{{ $message }}</div>@enderror
    </form>
</div>
@endsection
