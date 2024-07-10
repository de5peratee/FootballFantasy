<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FootballersController extends Controller
{
    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/players/squads?team=33",
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
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response, true);

            if (isset($data['response']) && is_array($data['response'])) {
                $teamData = $data['response'][0];

                $team = $teamData['team'];

                $players = $teamData['players'];

                return view('footballers', compact('players', 'team'));
            } else {
                echo "Ошибка: Неверный формат данных от API";
            }
        }
    }
}
