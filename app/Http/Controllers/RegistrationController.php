<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('/registration');
    }

    public function register(Request $request)
    {
        $validator = $request->validate([
            'login' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'min:8',
                'confirmed',
                'regex:/[a-zA-Z]/',
                'regex:/\d/',
            ],
            'password_confirmation' => 'required'
        ]);

        $user = new User;
        $user->login = $validator['login'];
        $user->email = $validator['email'];
        $user->password = Hash::make($validator['password']);
        $user->tournaments_counter = 0;
        $user->wins_counter = 0;
        $user->balance = 0;
        $user->save();

        Auth::login($user);
        Session::put('user', $user);

        return redirect('/main_page');
    }
}
