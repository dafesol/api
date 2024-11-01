<?php

namespace App\Api\Sync\Services;

use Illuminate\Support\Facades\Http;

class ConnectChuckNorrisAPI
{
    public function requestAPI(string $endpoint)
    {
        $url = 'https://api.chucknorris.io/jokes/' . $endpoint;
        $response = Http::get($url);
        return $response->json();
    }

    public function requestCurl(string $endpoint, array $params = [])
    {
        $params = http_build_query($params);
        $url = 'https://api.chucknorris.io/jokes/' . $endpoint . '?' . $params;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array());
        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}
