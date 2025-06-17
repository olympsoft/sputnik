<?php

use App\Http\Controllers\PriceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/prices/{currency?}', [ PriceController::class, 'prices'])
    ->whereIn('currency', ['RUR', 'USD', 'EUR'])
    ->name('product.prices');
