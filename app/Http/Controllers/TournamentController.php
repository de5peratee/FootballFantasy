<?php

namespace App\Http\Controllers;

use App\Models\tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index() {
        return view('/tournament');
    }
}
