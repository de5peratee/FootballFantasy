<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class AllTournamentsController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::all();
//        dd($tournaments);
        return view('/all-tournaments', compact('tournaments'));
    }
}
