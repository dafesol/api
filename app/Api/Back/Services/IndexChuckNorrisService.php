<?php

namespace App\Api\Back\Services;

use App\Api\Back\Entities\ChuckNorris;
use App\Api\Back\Request\IndexChuckNorrisRequest;
use App\Api\Sync\Services\ConnectChuckNorrisAPI;

class IndexChuckNorrisService
{
    protected IndexChuckNorrisRequest $indexChuckNorrisRequest;

    public function __construct(IndexChuckNorrisRequest $indexChuckNorrisRequest)
    {
        $this->indexChuckNorrisRequest = $indexChuckNorrisRequest;
    }

    public function handle()
    {
        return ChuckNorris::all();
    }
}
