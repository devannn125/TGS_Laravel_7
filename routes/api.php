<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookingController;

Route::apiResource('packages', PackageController::class)->except(['create', 'edit', 'view']);
Route::apiResource('bookings', BookingController::class)->except(['create', 'edit', 'view']);