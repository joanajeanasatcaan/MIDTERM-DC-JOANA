<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidderController;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return inertia('Home');
});

Route::get('/bidders', [BidderController::class, 'index']);
Route::get('/cars', [CarController::class, 'index']);
