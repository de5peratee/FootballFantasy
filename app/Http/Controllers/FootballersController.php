<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FootballersController extends Controller
{
    public function index()
    {
        return view('/footballers');
    }
}
