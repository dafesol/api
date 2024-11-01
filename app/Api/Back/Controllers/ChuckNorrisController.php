<?php

namespace App\Api\Back\Controllers;

use App\Api\Back\Resources\ChuckNorrisResource;
use App\Api\Back\Services\IndexChuckNorrisService;
use App\Api\Back\Services\StoreChuckNorrisService;
use App\Http\Controllers\Controller;

class ChuckNorrisController extends Controller
{
    public function index(IndexChuckNorrisService $chuckNorrisService)
    {
        return $chuckNorrisService->handle();
    }

    public function store(StoreChuckNorrisService $chuckNorrisService)
    {
        return response()->json($chuckNorrisService->handle(), 201);
    }
}
