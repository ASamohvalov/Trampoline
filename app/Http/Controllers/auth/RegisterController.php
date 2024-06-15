<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerPage()
    {
        return view('auth.register');
    }

    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'login' => 'required|unique:users',
            'email' => 'required|unique:users',
            'phone' => 'required|min:11|max:12',
            'password' => 'required|min:6',
            'password_repeat' => 'required|same:password'
        ], [
            'login' => 'Пользователь с таким логином уже существует',
            'email' => 'Такой email уже занят',
            'password_repeat' => 'пароли не совпадают'
        ]);

        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'login' => $request->login,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return redirect(route('loginPage'))->with('success', 'Пользователь успешно зарегестрирован');
    }
}
