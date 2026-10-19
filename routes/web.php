<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\StripeController::class, 'index']) -> name('index');
Route::post('/checkout', [App\Http\Controllers\StripeController::class, 'checkout']) -> name('checkout');
Route::get('/success', [App\Http\Controllers\StripeController::class, 'success']) -> name('success');
