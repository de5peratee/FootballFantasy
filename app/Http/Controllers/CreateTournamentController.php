<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Tournament;
use App\Models\Tournaments_Partipants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CreateTournamentController extends Controller
{
    public function index() {
        return view('/create-tournament');
    }

    public function validateField(Request $request)
    {
        $fieldName = $request->input('fieldName');
        $fieldValue = $request->input('fieldValue');

        $rules = [
            'tournament-name' => 'required|string|max:255',
            'budget' => 'required|integer|min:50|max:400',
            'date' => 'required|date_format:Y-m-d\TH:i|after_or_equal:now', //не проверяет время, только дату
            'iteration-dur' => 'required|integer|min:0',
            'iteration-cnt' => 'required|integer|min:1',
            'members-cnt' => 'required|integer|min:1|max:5',
            'timer' => 'required|integer|min:30',
            'password' => 'max:255',
            'league' => 'required|integer',
        ];

        $validator = Validator::make([$fieldName => $fieldValue], [$fieldName => $rules[$fieldName]]);

        if ($validator->fails()) {
            return response()->json([
                'valid' => false,
                'message' => $validator->errors()->first($fieldName)
            ]);
        }

        return response()->json(['valid' => true]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'tournament-name' => 'required|string|max:255',
            'budget' => 'required|integer|min:50|max:400',
            'date' => 'required|date_format:Y-m-d\TH:i|after_or_equal:now',
            'iteration-dur' => 'required|integer|min:0',
            'iteration-cnt' => 'required|integer|min:1',
            'members-cnt' => 'required|integer|min:1|max:5',
            'timer' => 'required|integer|min:30',
            'password' => 'max:255',
            'league' => 'required|integer',
        ]);

        $tournament = new Tournament();
        $tournament->creatorID = Auth::id();
        $tournament->name = $request->input('tournament-name');
        $tournament->budget = $request->input('budget');
        $tournament->date = $request->input('date');
        $tournament->iterationDuration = $request->input('iteration-dur');
        $tournament->iteration = $request->input('iteration-cnt');
        $tournament->participant = $request->input('members-cnt');
        $tournament->timer = $request->input('timer');
        $tournament->password = bcrypt($request->input('password'));
        $tournament->league = $request->input('league');
        $tournament->save();

        $participant = new Participant();
        $participant->user_id = Auth::id();
        $participant->arrangement = '';
        $participant->finalScore = 0;
        $participant->transferBudget = 0;
        $participant->place = 0;
        $participant->save();

        $participant->tournaments()->attach($tournament->id);

        return redirect('/my-tournaments');
    }
}
