<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyTournamentsController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $tournaments = Tournament::whereHas('participants', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();

        return view('my-tournaments', compact('tournaments'));;
    }

}
