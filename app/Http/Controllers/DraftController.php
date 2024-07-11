<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DraftController extends Controller
{
    public function index($id)
    {
        $userId = Auth::id();

        // Проверка, является ли пользователь участником турнира
        $isParticipant = Tournament::where('id', $id)
            ->whereHas('participants', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->exists();

        if (!$isParticipant) {
            return back();
        }

        // Получение ID лиги, связанной с турниром
        $tournament = Tournament::findOrFail($id);
        $leagueId = $tournament->league;

        // Инициализация cURL сеанса для получения информации о футболистах
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/players?league=$leagueId&season=2021&page=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: api-football-v1.p.rapidapi.com",
                "x-rapidapi-key: cf5718b89bmshab49c70a080b3f4p142777jsn2675cd3b9142"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            return back()->withErrors(['api_error' => "cURL Error #:$err"]);
        } else {
            $players = json_decode($response, true)['response'];

            $footballers = [];
            foreach ($players as $player) {
                if (isset($player['player'])) {
                    $footballers[] = [
                        'id' => $player['player']['id'],
                        'name' => $player['player']['name'],
                        'price' => $player['statistics'][0]['team']['league'] ?? null,
                        'goals' => $player['statistics'][0]['goals']['goals'] ?? null,
                        'shots' => $player['statistics'][0]['shots']['shots'] ?? null,
                        'key_passes' => $player['statistics'][0]['passes']['key'] ?? null,
                        'assists' => $player['statistics'][0]['goals']['assists'] ?? null,
                        'saves' => $player['statistics'][0]['duels']['saves'] ?? null,
                        'tackles' => $player['statistics'][0]['tackles']['tackles'] ?? null,
                        'yellow_cards' => $player['statistics'][0]['cards']['yellow_cards'] ?? null,
                        'red_cards' => $player['statistics'][0]['cards']['red_cards'] ?? null,
                        'image' => $player['player']['photo']
                    ];
                }
            }
//            dd($footballers);
            return view('draft', [
                'tournamentId' => $id,
                'footballers' => $footballers
            ]);
        }
    }
}
