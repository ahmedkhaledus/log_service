<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoggsController;

Route::group(["prefix" => 'v1'], function () {
    Route::post('log', [LoggsController::class, 'store']);
});
