<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllTournamentsController extends Controller
{
    public function index()
    {
        return view('/all-tournaments');
    }
}
