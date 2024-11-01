<?php

namespace App\Api\Back\Services;

use App\Api\Back\Entities\ChuckNorris;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreChuckNorrisService extends Controller
{
    protected Request $storeChuckNorrisRequest;

    public function __construct(Request $storeChuckNorrisRequest)
    {
        $this->storeChuckNorrisRequest = $storeChuckNorrisRequest;
    }

    public function handle()
    {
        $data = $this->storeChuckNorrisRequest->request->all();
        return ChuckNorris::create($data);
    }
}
