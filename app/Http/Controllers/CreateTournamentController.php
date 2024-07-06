<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateTournamentController extends Controller
{
    public function index() {
        return view('/create-tournament');
    } 
}
