<?php

use App\Http\Controllers\Api\V1\{TravelController, TourController};
use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\Admin;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
});

Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::post('travels', [Admin\TravelController::class, 'store']);
        Route::post('travels/{travel}/tours', [Admin\TourController::class, 'store']);

        Route::delete('travels/{travel}/delete', [Admin\TravelController::class, 'destroy']);
    });

    Route::put('travels/{travel}/update', [Admin\TravelController::class, 'update']);
});

Route::get('/travels', [TravelController::class, 'index']);
Route::get('/travels/{travel:slug}/tours', [TourController::class, 'index']);
