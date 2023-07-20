<?php

use App\Http\Controllers\Api\V1\Admin\TourController;
use App\Http\Controllers\Api\V1\Admin\TravelController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::post('travels', [TravelController::class, 'store']);
        Route::post('travels/{travel}/tours', [TourController::class, 'store']);

        Route::delete('travels/{travel}/delete', [TravelController::class, 'destroy']);
    });

    Route::put('travels/{travel}/update', [TravelController::class, 'update']);
});
