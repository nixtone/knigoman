<form action="{{ route('user.auth') }}" method="post">
    @csrf
    <div class="field_area">
        <label for="email_auth">E-mail</label>
        <input type="text" name="email" id="email_auth" class="field">
        @error('email')<div class="err">{{ $message }}</div>@enderror
    </div>
    <div class="field_area">
        <label for="password_auth">Пароль</label>
        <input type="password" name="password" id="password_auth" class="field">
        @error('password')<div class="err">{{ $message }}</div>@enderror
    </div>
    <input type="submit" value="Войти" class="btn">
    @error('formError')<div class="err">{{ $message }}</div>@enderror
</form>
