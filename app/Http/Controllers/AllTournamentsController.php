<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AllTournamentsController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::all();
        return view('/all-tournaments', compact('tournaments'));
    }

    public function join(Request $request)
    {
        $request->validate([
            'tournament_id' => 'required|exists:tournament,id',
            'password' => 'required|string',
        ]);

        $tournament = Tournament::findOrFail($request->tournament_id);

        if (Hash::check($request->password, $tournament->password)) {
            $user = Auth::user();

            if ($tournament->participants()->where('user_id', $user->id)->exists()) {
                return response()->json(['success' => false, 'message' => 'Вы уже участвуете в этом турнире.'], 422);
            }

            $participant = Participant::firstOrCreate(['user_id' => $user->id], [
                'arrangement' => '',
                'finalScore' => 0,
                'transferBudget' => 0,
                'place' => 0,
            ]);

            $participant->tournaments()->attach($tournament->id);

            return response()->json(['success' => true, 'redirect' => route('my-tournaments')]);
        } else {
            return response()->json(['success' => false, 'message' => 'Неверный пароль.'], 422);
        }
    }

    public function joinWithoutPassword($tournamentId)
    {
        $tournament = Tournament::findOrFail($tournamentId);
        $user = Auth::user();

        if ($tournament->participants()->where('user_id', $user->id)->exists()) {
            return response()->json(['success' => false, 'message' => 'Вы уже участвуете в этом турнире.'], 422);
        }

        $participant = Participant::firstOrCreate(['user_id' => $user->id], [
            'arrangement' => '',
            'finalScore' => 0,
            'transferBudget' => 0,
            'place' => 0,
        ]);

        $participant->tournaments()->attach($tournament->id);

        return redirect('my-tournaments');
    }

}
