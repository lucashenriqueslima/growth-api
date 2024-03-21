<?php

use App\Http\Controllers\Api\V1\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\VerifyEmailController;


Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::prefix('v1')->group(function () {

    Route::prefix('auth')->group(function () {

        Route::post('/verify-email', [VerifyEmailController::class, 'store']);
        Route::post('/login', [LoginController::class, 'store']);

    });

});

Route::get('/user', function (Request $request) {
    return $request->user();

})->middleware('auth:sanctum');

