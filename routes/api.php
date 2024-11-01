<?php

use App\Api\Auth\Controllers\LoginController;
use App\Api\Back\Controllers\ChuckNorrisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('login', [LoginController::class, 'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['middleware' => ['auth:sanctum']], function () {
    /* Users */
    Route::get('me', [LoginController::class, 'me']);
    Route::get('logout', [LoginController::class, 'logout']);

    /* Chuck Norris Posts */
    Route::group(['prefix' => 'chucknorris'],function () {
        Route::get('index', [ChuckNorrisController::class, 'index']);
        Route::post('store', [ChuckNorrisController::class, 'store']);
    });

});
