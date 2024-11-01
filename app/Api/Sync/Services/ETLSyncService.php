<?php

namespace App\Api\Sync\Services;

use App\Api\Back\Entities\ChuckNorris;

class ETLSyncService
{
    public function sync()
    {
        $chuckNorrisService = new ConnectChuckNorrisAPI();
        $data = $chuckNorrisService->requestAPI('random');

        $formatData = [
            ChuckNorris::VALUE => $data[ChuckNorris::VALUE],
            ChuckNorris::URL => $data[ChuckNorris::URL],
            ChuckNorris::ICON_URL => $data[ChuckNorris::ICON_URL],
        ];

        /* If only have a simple array, if is multidimensional you need to do a foreach */
        ChuckNorris::create($formatData);
    }
}
