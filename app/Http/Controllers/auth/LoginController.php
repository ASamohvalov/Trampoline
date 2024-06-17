<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function authorization(Request $request) 
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('login', $request->login)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['error' => 'Неверный логин или пароль'])->withInput();
        }
        Auth::login($user);

        return redirect(route('catalogPage'));
    }
}
