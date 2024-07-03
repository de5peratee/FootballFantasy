<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationControllerr extends Controller
{
    public function index()
    {
        return view('/registration');
    }
}
