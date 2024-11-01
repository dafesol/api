<?php

namespace App\Api\Back\Services;

use App\Api\Back\Request\IndexChuckNorrisRequest;
use App\Api\Sync\Services\ChuckNorris;

class IndexChuckNorrisService
{
    protected IndexChuckNorrisRequest $indexChuckNorrisRequest;

    public function __construct(IndexChuckNorrisRequest $indexChuckNorrisRequest)
    {
        $this->indexChuckNorrisRequest = $indexChuckNorrisRequest;
    }

    public function handle()
    {
        $chuckNorrisService = new ChuckNorris();
        return $chuckNorrisService->requestHttp('random');
    }
}
