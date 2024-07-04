<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthorizationController extends Controller
{
    public function index()
    {
        return view('/authorization');
    }

    public function login(Request $request)
    {
        $validator = $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('login', $validator['login'])->first();

        if ($user && Hash::check($validator['password'], $user->password)) {
            Auth::login($user);
            Session::put('user', $user);
            return redirect('/main_page');
        } else {
            return back()->withErrors([
                'login' => 'Неверный логин или пароль.',
            ]);
        }
    }
}
