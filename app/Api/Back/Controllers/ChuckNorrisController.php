<?php

namespace App\Api\Back\Controllers;

use App\Api\Back\Services\IndexChuckNorrisService;
use App\Http\Controllers\Controller;

class ChuckNorrisController extends Controller
{
    public function index(IndexChuckNorrisService $chuckNorrisService)
    {
        return $chuckNorrisService->handle();
    }
}
