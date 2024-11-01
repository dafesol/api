<?php

namespace App\Api\Sync\Services;

class ChuckNorris
{
    public function requestHttp(string $endpoint, array $params = [])
    {
        $params = http_build_query($params);
        $url = 'https://api.chucknorris.io/jokes/' . $endpoint . '?' . $params;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//            'Authorization: Basic '. base64_encode(env('ALTO_USER') . ":" . env('ALTO_PWD'))
        ));
        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}
