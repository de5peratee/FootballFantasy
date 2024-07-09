<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getTimezones()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/timezone",
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
            return response()->json(['error' => "cURL Error #:" . $err]);
        } else {
            return response($response);
        }
    }

    public function getLeagues()
    {
        $currentLeagues = $this->fetchLeagues();

        return view('create-tournament', ['leagues' => array_slice($currentLeagues, 0, 10)]);
    }

    //Пагинация
    public function loadMoreLeagues(Request $request)
    {
        $offset = $request->input('offset');
        $currentLeagues = $this->fetchLeagues();

        $moreLeagues = array_slice($currentLeagues, $offset, 10);

        return response()->json($moreLeagues);
    }

    //Получение лиг
    private function fetchLeagues()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/leagues",
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
            return [];
        } else {
            $data = json_decode($response, true);
            if (isset($data['response']) && is_array($data['response'])) {
                $currentDate = date('Y-m-d');
                $currentLeagues = array_filter($data['response'], function ($league) use ($currentDate) {
                    $season = $league['seasons'][0];
                    return !empty($season['current']) && $season['current'] == true && $season['end'] >= $currentDate;
                });

                return $currentLeagues;
            } else {
                return [];
            }
        }
    }

    //Поиск лиг
    public function searchLeagues(Request $request)
    {
        $searchText = $request->input('search');
        $currentLeagues = $this->fetchLeagues();

        $filteredLeagues = array_filter($currentLeagues, function($league) use ($searchText) {
            return stripos($league['league']['name'], $searchText) !== false;
        });

        return response()->json(array_values($filteredLeagues));
    }
}
