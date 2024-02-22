<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function private() {
        //dd(Auth::user());
        $arBook = Book::all()->where('user_id', Auth::user()->id);
        // $arBook = Book::all()->where('category_id', $category->id);
        return view('user.private', compact('arBook'));
    }

    public function reg() {
        return view('user.reg');
    }

    public function auth(UserRequest $request) {
        if(Auth::check()) {
            return redirect()->intended(route('user.private'));
        }
        if(Auth::attempt($request->validated())) {
            return redirect()->intended(route('user.private'));
        }
        return redirect(route('user.login'))->withErrors([
            'formError' => 'Не удалось аутентифицироваться'
        ]);
    }

    public function signup(UserRequest $request) {
        // Если пользователь аутентифицирован, редирект в ЛК
        if(Auth::check()) {
            return redirect(route('user.private'));
        }
        // Валидация
        $validated = $request->validated();
        $arError = [];
        if($request->password != $request->password_retype) {
            $arError['password_retype'] =  'Пароли не совпадают';
        }
        if(User::where('email', $validated['email'])->exists()) {
            $arError['email'] = 'Такой E-mail уже существует';
        }
        if(!empty($arError)) {
            return redirect()->route('user.reg')->withErrors($arError);
        }
        // Создаем пользователя
        $user = User::create($validated);
        // Если удалось создать, редирект в ЛК
        if($user) {
            Auth::login($user);
            return redirect(route('user.private'));
        }
        // Провал регистрации
        return redirect(route('user.reg'))->withErrors([
            'formError' => 'Ошибка создания пользователя'
        ]);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('index');
    }

}
